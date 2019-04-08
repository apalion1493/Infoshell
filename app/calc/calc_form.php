<?php
# die(var_dump($_POST));

$post=$_POST;
$get=$_GET;
$err = 0;

if (!isset($post['calc_tel'], $post['calc_email']))
    $err = 'Введите Ваш Телефон и Email<br/>';

if (!(isset($post['platform_android']) || isset($post['platform_apple']) || isset($post['platform_web'])))
    $err = 'Выберите платформу<br/>';

if ( (isset($post['calc_address']) && $post['calc_address']!='') || !isset($get['verify']) || $get['verify']!='1' || !isset($post['test']) || $post['test']!='-1')
    $err = 'Спам блокировка!<br/>';

if ($err===0) {
    
    $post['calc_email'] = filter_var($post['calc_email'], FILTER_SANITIZE_EMAIL);
    
	$subject = 'Запрос из Калькулятор расчета конечной стоимости работ';
    
    
	$logo = '<table style="font-family: \'Helvetica\', arial;width:100%;background-color:#ffffff;border-collapse:collapse;border-spacing:0;border:0;" border="0" cellpadding="0" cellspacing="0">
    <tr><td style="padding:10px;"><center style="width:100%;">
      <table style="width:100%;max-width:632px;background-color:#fcfcfc;border-collapse:collapse;border-spacing:0;border:0;" border="0" cellpadding="0" cellspacing="0">
        <tr><td>
          <table border="0" cellpadding="0" cellspacing="0">
            <tr><td colspan="3" style="background-image:url(https://infoshell.ru/wp-content/themes/mark_up/calc/img/bg.png);background-size:cover;background-position:center;width:100%;">
                <table style="height:48px;"><tr><td>&nbsp;</td></tr></table>
                <table style="height:70px"><tr><td style="width:40px;"></td><td style="background-image:url(https://infoshell.ru/wp-content/themes/mark_up/calc/img/vid-2-logo-infoshell.png);background-repeat:no-repeat;background-position:center;min-width:70px;">&nbsp;</td></tr></table>
                <table style="height:10px;"><tr><td>&nbsp;</td></tr></table>
                <table><tr><td style="width:40px;"></td><td><h1 style="font-family: \'Montserrat\', arial;margin:0px;width:228px;font-size:14.8px;font-weight:bold;line-height:1.38;color:#ffffff;text-transform:uppercase;">Разработка<br> мобильных приложений & веб-сервисов</h1></td></tr></table>
                <table style="height:71px;"><tr><td></td></tr></table>
            </td></tr>
            <tr><td style="min-width:40px"></td><td style="min-width:536px;">
                <table style="height: 30px;" border="0" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>';

	$head = '<table border="0" cellpadding="0" cellspacing="0">
                    <tr><td><p style="font-size:16px;color:#2e2e2e;font-weight:bold;margin:0;padding-bottom:8px;line-height:1.69;">
                        Здравствуйте, '.$post['calc_name'].'</p>
                </td></tr></table>
                <table style="width:100%;" border="0" cellpadding="0" cellspacing="0">
                    <tr><td style="font-size:16px;color:#2e2e2e;line-height:1.44;margin:0;">
                        Вы рассчитали примерную стоимость разработки своего проекта. Выбранные вами позиции:
                    </td></tr>
                </table>
                <table style="height:27px;" border="0" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>';
    
    //$body.= '<table border="0" cellpadding="0" cellspacing="0" style="width:100%;"><tr>';
    $body = $bodyAmo = '';
    foreach ($post as $k=>$p) {
        if (!in_array($k, array('calc_tel', 'calc_email', 'calc_text', 'calc_price', 'calc_name')))
        $body.= '<table style="width:100%;"><tr>
                <td style="width:10px;"><table><tr><td style="color:#2e2e2e;vertical-align:text-bottom;">●</td></tr></table></td>
                <td><p style="font-size:14px;color:#2e2e2e;margin:0;">'.$p.';</p></td>
            </tr></table>';
        $bodyAmo.=' ● '.$p.'; '."\n";
    }
    //$body.= '</tr></table>';
    
    $footer = '<table style="height:65px;" border="0" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
                <p style="font-size:16px;color:#2e2e2e;font-weight:bold;margin:0;padding-bottom:8px;line-height:1.69;">
                    Примерная стоимость вашего проекта: ​​'.$post['calc_price'].' рублей.</p>
            </td></tr></table>
            <table style="width:100%;" border="0" cellpadding="0" cellspacing="0"><tr><td>
                <p style="font-size:16px;color:#2e2e2e;line-height:1.44;margin:0;">Наш менеджер свяжется с вами в течение дня, чтобы
                <br> обсудить детали.</p>
            </td></tr></table>

            <table style="height:25px;" border="0" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
                <p style="font-size: 16px; color: #2e2e2e; font-weight: bold; margin: 0; padding-bottom: 8px; line-height: 1.69;">Благодарим за обращение!</p>
            </td></tr></table>
            
            <table style="height:31px;" border="0" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>
        </td><td style="min-width:40px"></td>
        </tr>
        </table>
        </td></tr></table>
    </center></td></tr></table>';
    


    $headAdmin = '<table border="0" cellpadding="0" cellspacing="0">
                    <tr><td><p style="font-size:16px;color:#2e2e2e;font-weight:bold;margin:0;padding-bottom:8px;line-height:1.69;">
                        Здравствуйте!<br/>
                        Клиент: <b>'.$post['calc_name'].'</b><br/>
                        Email: <b>'.$post['calc_email'].'</b><br/>
                        Tel: <b>'.$post['calc_tel'].'</b><br/>
                        Comment: <b>'.$post['calc_text'].'</b><br/>
                    </p>
                </td></tr></table>
                <table style="width:100%;" border="0" cellpadding="0" cellspacing="0">
                    <tr><td style="font-size:16px;color:#2e2e2e;line-height:1.44;margin:0;">
                        Рассчитал примерную стоимость разработки своего проекта. Выбранные им позиции:
                    </td></tr>
                </table>
                <table style="height:27px;" border="0" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>';
    
    
    $headers = 'From: InfoShell.Ru <info@infoshell.ru>'."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8'."\r\n";
    
    
    
    
    require 'lib/calc_form_phpmailer_amo.inc.php';
    
    
    echo $email->isError()
    ? '<h2 class="text-danger">Ошибка! Ваш запрос не отправлен! Извините за неудобства!</h2>'
    : '<h2 class="text-success">Ваш запрос отправлен успешно!</h2>';
    
    #mail($post['calc_email'], $subject, $logo.$head.$body.$footer, $headers);
    #if (mail('info@infoshell.ru', $subject, $logo.$headAdmin.$body.$footer, $headers))
		#echo '<h2 class="text-success">Ваш запрос отправлен успешно!</h2>'; #'<div class="alert alert-success" role="alert">Запрос отправлен успешно!</div>';
	
} else echo '<h2 class="alert alert-danger" role="alert">',$err,'!</h2>';
?>