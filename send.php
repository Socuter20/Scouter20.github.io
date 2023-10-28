<?php 

$surname = $_POST['surname'];
$name = $_POST['name'];
$middlename = $_POST['middlename'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$surname = htmlspecialchars($surname);
$name = htmlspecialchars($name);
$middlename = htmlspecialchars($middlename);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);

$surname = urldecode($surname);
$name = urldecode($name);
$middlename = urldecode($middlename);
$tel = urldecode($tel);
$email = urldecode($email);

$surname = trim($surname);
$name = trim($name);
$middlename = trim($middlename);
$tel = trim($tel);
$email = trim($email);

if (mail("example@mail.ru", "Заявка с сайта", "ФИО: ".$surname.  $name  .$middlename , "From: example2@mail.ru")){
    echo "Сообщение успешно отправлено на $email.";
} else {
    echo "Произошла ошибка";
}

?>