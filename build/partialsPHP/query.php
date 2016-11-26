<?php
require_once 'connect2016.php'; // подключаем скрипт

// подключаемся к серверу
//убираем спец символы, пробелы....
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $name = test_input($_REQUEST['name']);
   $surname = test_input($_REQUEST['surname']);
   $mobile = test_input($_REQUEST['mobile']);
   $mail = test_input($_REQUEST['mail']);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


//внесли информацию

$insert_sql = mysqli_query($link,"INSERT INTO tablest VALUES ('NULL', '$name', '$surname', '$mobile', '$email')");

//отправка письма
$subject = "Robot - Робот";
$headers = "From: My <abc@gmail.com>\r\nContent-type: text/html; charset=windows-1251 \r\n";
mail($email,$subject, $message, $headers)


//header("Location: http://localhost:63342/forms/forms/index.html");

// закрываем подключение
mysqli_close($link);
?>
