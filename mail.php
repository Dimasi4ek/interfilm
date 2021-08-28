<?php

/* https://api.telegram.org/bot1061717959:AAFnmzqkfkQXf4DbFs6Y_X3VnzLBBjnpbto/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$theme = $_POST['user_theme'];
$token = "";
$chat_id = "";
$arr = array(
  'Имя клиента: ' => $name,
  'Телефон: ' => $phone,
  'Тема:' => $theme
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>