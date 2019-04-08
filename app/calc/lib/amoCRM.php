<?php
class amoCRM
{
    const AMO_ACCOUNT   = 'inshell';

    private $amoApiAccount = array(
        'USER_LOGIN' => 'kirill@infoshell.ru',
        'USER_HASH'  => 'adeaefb72861bfb6debeec2555db4f0d'
    );

    const RESPONSIBLE_USER_ID   = 1120726;  // Kirill
    const PIPELINE_ID           = 335863;  // 
    const LEAD_STATUS_ID        = 12651238; // Get Lead (Получен лид)
    
    private $methods = array(
		'add'   => 'set',
        'list'  => 'list',
        'update'=> 'set',
    );

    public function createRequest($route, $method, $postData = false, $urlQuery = array())
    {
        $result = $this->sendRequest($route, $method, $postData, $urlQuery);
        $response = $result['response']['response'][$route];
        
        if ($this->hasErrors($result)) return false;

        return (is_array($response[$method]) && count($response[$method]) > 0)
            ? $response[$method]
            : ((is_array($response) && count($response) > 0)
                ? $response
                : false);
    }

    protected function sendRequest($route, $method, $postData = false, $urlQuery = array())
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $this->getMethodUrl($route, $method, $urlQuery));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        if ($postData !== false) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(
                array('request' => array($route => array($method => array($postData))))
            ));
            curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        }

        $out = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        return array(
            'response'  => json_decode($out, true),
            'status'    => (int)$code
        );
    }

    protected function getMethodUrl($route, $method, $urlQuery = array())
    {
        return 'https://' . self::AMO_ACCOUNT . '.amocrm.ru/private/api/v2/json/'
                . $route . '/' . $this->methods[$method]
                . '?' . http_build_query(array_merge($this->amoApiAccount, $urlQuery));
    }

    protected function hasErrors($response)
    {
        return (!is_array($response['response']) && ($response['status'] != 200 && $response['status'] != 204));
    }

    public function getLocation()
    {
        $location = json_decode(file_get_contents('http://ipinfo.io/'.$_SERVER['REMOTE_ADDR'].'/json'));
        return array(
            'region'=> $location->region,
            'city'  => $location->city
        );
    }

    public function testDublicate($route, $query)
    {
        $dublicates = $this->createRequest(
            $route,
            'list',
            false,
            array('query' => $query,)
        );

        foreach ($dublicates as $item)
            foreach ($item['custom_fields'] as $field)
                foreach ($field['values'] as $value)
                    if($value['value']==$query) return $item;
        
        return false;
    }
}