<?php


require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Определяем действие формы
if ($_POST['action'] == "sendCalculateForm") {
    sendEmail();
    die();
} elseif ($_POST['action'] == "sendCallbackForm") {
    sendCallbackEmail();
    die();
} else {
    response('error', ["message" => "No data."]);
    die();
}

function response($type = 'success', $data = [])
{
    echo json_encode((object) ['type' => $type, "data" => $data]);
}

function sendEmail()
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'artix.pw';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'test@artix.pw';                     //SMTP username
        $mail->Password   = 'BW8d%VCFAQeZ';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('info@evakuator-24.com', 'Evakuator-24');
		$mail->addAddress('evakuator.nn@mail.ru', 'Evakuator-24');

        //Content
        define("BR", "<br/>");
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'На сайте evakuator-24.com заполенена форма "РАССЧИТАТЬ СТОИМОСТЬ ЭВАКУАЦИИ"';
        $mail->Body    = 'Данные формы: '.BR;
        $mail->Body   .= 'Имя: <b>'.$_POST['firstName']."</b>".BR;
        $mail->Body   .= 'Телефон: <b>'.$_POST['phone']."</b>".BR;
        $mail->Body   .= 'Откуда: <b>'.$_POST['from']."</b>".BR;
        $mail->Body   .= 'Куда: <b>'.$_POST['to']."</b>".BR;
        $mail->Body   .= 'Тип транспорта: <b>'.getTransportTypeById($_POST['transportType'])."</b>".BR;
        $mail->Body   .= 'Блокировка колес: <b>'. ($_POST['block'] == "1" ? "Да" : "Нет") ."</b>".BR;

        $mail->send();

        response('ok', $_POST);
    } catch (Exception $e) {
        response('ok', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

function sendCallbackEmail()
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'artix.pw';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'test@artix.pw';
        $mail->Password   = 'BW8d%VCFAQeZ';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('info@evakuator-24.com', 'Evakuator-24');
        $mail->addAddress('spa_s_a_s_h_a_5@mail.ru', 'Evakuатор-24');

        define("BR", "<br/>");
        $mail->isHTML(true);
        $mail->Subject = 'На сайте evakuator-24.com заполнена форма "ОБРАТНЫЙ ЗВОНОК"';
        $mail->Body    = 'Данные формы:' . BR;
        $mail->Body   .= 'Имя: <b>' . $_POST['firstName'] . '</b>' . BR;
        $mail->Body   .= 'Телефон: <b>' . $_POST['phone'] . '</b>' . BR;

        $mail->send();
        response('ok', $_POST);
    } catch (Exception $e) {
        response('error', ["message" => $mail->ErrorInfo]);
    }
}

function getTransportTypeById($transportType)
{
    switch ($transportType) {
        case "0":
            return "Мотоцикл";

        case "1":
            return "Легковой";

        case "2":
            return "Микроавтобус";

        case "3":
            return "Спецтехника";

        case "4":
            return "Джип";

        case "5":
            return "Внедорожная эвакуация";

        default:
            return "Не указан";
    }
}
