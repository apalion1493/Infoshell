<?php
session_start();
$session    = $_SESSION;
$server     = $_SERVER;

$smo_utm_source     = isset($session['smo_utm_source']) ? $session['smo_utm_source'] : '';
$smo_utm_medium     = isset($session['smo_utm_medium']) ? $session['smo_utm_medium'] : '';
$smo_utm_campaign   = isset($session['smo_utm_campaign']) ? $session['smo_utm_campaign'] : '';
$smo_utm_content    = isset($session['smo_utm_content']) ? $session['smo_utm_content'] : '';
$smo_utm_term       = isset($session['smo_utm_term']) ? $session['smo_utm_term'] : '';

require '../../mail/PHPMailer/PHPMailerAutoload.php';

$htmlBody = '<table><tr><td>Google реклама utm_source:</td><td></td></tr>
    <tr><td>Источник кампании:</td><td>'.$smo_utm_source.'</td></tr>
    <tr><td>Тип трафика:</td><td>'.$smo_utm_medium.'</td></tr>
    <tr><td>Название кампании:</td><td>'.$smo_utm_campaign.'</td></tr>
    <tr><td>Идентификатор объявления:</td><td>'.$smo_utm_content.'</td></tr>
    <tr><td>Ключевое слово:</td><td>'.$smo_utm_term.'</td></tr>
</table>';


if(strripos($server['HTTP_REFERER'], "resault=1") === false){
    $ymparam = isset($post['ymparam']) ? $post['ymparam'] : '';
    
    //http://new.infoshell.ru/project/malysharij?mailsuccess=1&ymparam=CALL_US_TOPALL_US_TOPCALL_US_TOPefault
    $link = (preg_match('/ymparam=([^&]+)/imsu', $server['HTTP_REFERER']))
        ? preg_replace('/ymparam=([^&]+)/imsu', 'ymparam='.$ymparam, $server['HTTP_REFERER'])
        : ($server['HTTP_REFERER'] . ((strripos($server['HTTP_REFERER'], "?") === false) ? '?' : '&') . 'mailsuccess=1&ymparam=' . $ymparam);
        
} else $link = $server['HTTP_REFERER'];


$email = new PHPMailer();
$email->CharSet = 'UTF-8';
$email->From    = 'job@infoshell.mobi';
$email->Mailer  = 'smtp';
$email->Host    = 'smtp.yandex.ru';
$email->Port    = 465;
$email->SMTPSecure  = 'ssl';
$email->SMTPAuth    = true;
$email->Username    = 'job@infoshell.mobi';
$email->Password    = 'dZ67CBLh';
$email->FromName    = 'infoshell.ru';
$email->Subject     = $subject;
$email->Body        = $logo.$head.$body.$footer;

# SEND CLIENT
$email->isHTML(true);
$email->AddAddress($post['calc_email']);
$email->Send();

# SEND ADMIN
$email->Body        = $logo.$headAdmin.$body.$footer.$htmlBody;
$email->isHTML(true);
$email->clearAllRecipients();
#$email->AddAddress('info@infoshell.ru');
$email->AddAddress('order@infoshell.ru');
$email->Send();


# AMOCRM
require 'amoCRM.php';
$amo = new AmoCRM();

    $amoData['name'] = $post['calc_name'];
    $amoData['phone'] = $post['calc_tel'];
    $amoData['email'] = $post['calc_email'];
    $amoData['message'] = $post['calc_text'];
    $amoData['message'] = $post['calc_name'].' (Email: '.$post['calc_email'].'; Tel:'.$post['calc_email'].') рассчитал стоимость разработки своего проекта.'.
                    "\n".' (Цена: '.$post['calc_price'].' рублей).'."\n".$post['calc_text']."\n\n".'Выбранные позиции:'."\n".$bodyAmo;
        
        
        #$contacts = $amo->testDublicate('contacts',$amoData['email']);
        #if ($contacts == false) $contacts = $amo->testDublicate('contacts',$amoData['phone']);
        #if ($contacts == false) {}

            $lead = $amo->createRequest(
                'leads',
                'add',
                array(
                    'name'          => $subject,
                    'status_id'     => AmoCRM::LEAD_STATUS_ID,
                    'pipeline_id'   => AmoCRM::PIPELINE_ID,
                    'responsible_user_id' => AmoCRM::RESPONSIBLE_USER_ID,
                    'created_at'    => time(),
                )
            );

        #if ($lead[0]['id'] == 0) {
            
            
            $contactId = $amo->createRequest(
                'contacts',
                'add',
                array(
                    'name' => $amoData['name'],
                    'linked_leads_id' => array($lead[0]['id']),
                    'custom_fields' => array(
                        array(
                            'id' => 1402105, //Mobile
                            'values' => array(
                                array(
                                    'value' => $amoData['phone'],
                                    'enum'  => 'MOB'
                                )
                            )
                        ),
                        array(
                            'id' => 1402107, //Email
                            'values' => array(
                                array(
                                    'value' => $amoData['email'],
                                    'enum'  => 'WORK'
                                )
                            )
                        ),
                    ),
                )
            );
        
        
            $noteId = $amo->createRequest(
            'notes',
            'add',
            array(
                'element_id'    => $lead[0]['id'],
                'element_type'  => 2, //сделка
                'note_type'     => 4, // обычное примечание
                'text'          => $amoData['message'],
                'responsible_user_id' => AmoCRM::RESPONSIBLE_USER_ID,
            )
            );
        
        #}
        
        /*

    if ($id != 0) {
        $amo->addContact($id, $post['calc_name'], $post['calc_tel'], $post['calc_email']);
        $amo->addNote($id, $logo.$headAdmin.$body.$footer.$htmlBody);
    }*/


?>