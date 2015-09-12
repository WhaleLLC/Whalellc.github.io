<?php
if($_POST){
  $to = "instarlpc@gmail.com";
  $from = 'instarlpc@gmail.com';
  $subject = "Проверка почты";
  $message = 'Имя: ' . $_POST['name'] . '/n' . 'Телефон: ' . $_POST['phone'];
  $headers = "Content-type: text/html; charset=UTF-8 \r\n";
  $headers .= "From: <instarlpc@gmail.com>\r\n";
  $result = mail($to, $subject, $message, $headers);

  if ($result){
    echo "<p>Cпасибо!</p>";
  }
}
?>
