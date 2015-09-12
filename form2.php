<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


<?php
if($_POST)
{
$to2 = "instarlpc@gmail.com";
$from2 = 'instarlpc@gmail.com';
$subject2 = "Проверка почты";
$message2 = 'Имя: '.$_POST['name2'].'; Телефон: '.$_POST['telephone2'].';  Почта: '.$_POST['email'].'; Вопрос: '.$_POST['mess'].'; ';
$headers2 = "Content-type: text/html; charset=UTF-8 \r\n";
$headers2 .= "From: <instarlpc@gmail.com>\r\n";
$result2 = mail($to2, $subject2, $message2, $headers2);

if ($result2){ 
echo "<p>Cпасибо!</p>";

}
}
?>

</body>
</html>