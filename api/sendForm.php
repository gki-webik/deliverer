<?php
define('TELEGRAM_TOKEN', '#####');
define('TELEGRAM_CHAT_ID', '#####');

function message_to_telegram($mail)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHAT_ID,
                'text' => $mail,
            ),
        )
    );
    curl_exec($ch);
}

if (isset($_POST['type'])) {
    if ($_POST['type'] == "1") {
        if (isset($_POST['inputForm1']) && isset($_POST['inputForm2']) && isset($_POST['inputForm3']) && isset($_POST['inputForm4']) && isset($_POST['inputForm5'])) {
            $inputForm1 = $_POST['inputForm1'];
            $inputForm2 = $_POST['inputForm2'];
            $inputForm3 = $_POST['inputForm3'];
            $inputForm4 = $_POST['inputForm4'];
            $inputForm5 = $_POST['inputForm5'];
            $inputForm6 = $_POST['inputForm6'];
            $mail = "Форма просчета стоимости маршрута" . "\n\n" .
                "Откуда: $inputForm1" . "\n" .
                "Куда: $inputForm2" . "\n" .
                "Вес: $inputForm3" . "\n" .
                "Имя: $inputForm4" . "\n" .
                "Телефон:  $inputForm6 $inputForm5";
            message_to_telegram($mail);
        } else {
            http_response_code(404);
        }
    } else if ($_POST['type'] == "2") {
        if (isset($_POST['fio']) && isset($_POST['email']) && isset($_POST['tel'])) {
            $fio = $_POST['fio'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $mail = "Форма для расчета стоимости доставки груза" . "\n\n" .
                "Фио: $fio" . "\n" .
                "Email: $email" . "\n" .
                "Телефон: $tel";
            if (isset($_POST['comment'])) {
                $comment = $_POST['comment'];
                if ($comment != " " && $comment != "") {
                    $mail .= "\nКомментарий: $comment";
                }
            }
            message_to_telegram($mail);
        } else {
            http_response_code(404);
        }
    } else if ($_POST['type'] == "3") {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $mail = "Подписка на рассылку" . "\n\n" .
                "Email: $email";
            message_to_telegram($mail);
        } else {
            http_response_code(404);
        }
    } else if ($_POST['type'] == "4") {
        if (isset($_POST['fio']) && isset($_POST['email']) && isset($_POST['tel'])) {
            $fio = $_POST['fio'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $mail = "Форма поддержки" . "\n\n" .
                "Фио: $fio" . "\n" .
                "Email: $email" . "\n" .
                "Телефон: $tel";
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
                if ($text != " " && $text != "") {
                    $mail .= "\nКомментарий: $text";
                }
            }
            message_to_telegram($mail);
        } else {
            http_response_code(404);
        }
    } else {
        http_response_code(404);
    }
} else {
    http_response_code(404);
}
?>