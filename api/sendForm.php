<?php
if (isset($_POST['inputForm1']) && isset($_POST['inputForm2']) && isset($_POST['inputForm3']) && isset($_POST['inputForm4']) && isset($_POST['inputForm5'])) {
    $inputForm1 = $_POST['inputForm1'];
    $inputForm2 = $_POST['inputForm2'];
    $inputForm3 = $_POST['inputForm3'];
    $inputForm4 = $_POST['inputForm4'];
    $inputForm5 = $_POST['inputForm5'];
    $inputForm6 = $_POST['inputForm6'];
    $mail = "Откуда: $inputForm1" . "\n" .
        "Куда: $inputForm2" . "\n" .
        "Вес: $inputForm3" . "\n" .
        "Имя: $inputForm4" . "\n" .
        "Телефон:  $inputForm6 $inputForm5";

    define('TELEGRAM_TOKEN', '7354755351:AAEbKsh4XZZOVwWru3kN95Cf8lCePL6ioYM');
    define('TELEGRAM_CHAT_ID', '6317166538');

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
    
    message_to_telegram($mail);
} else {
    http_response_code(404);
}
?>