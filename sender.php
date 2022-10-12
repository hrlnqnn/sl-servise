<?php
    $name = $_POST['username'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['feedback'];

	$to = "hrlnqnn@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Залиште свої дані, ми вам передзвонимо SL Service";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to");

?>

<p>Привіт. Ваша форма відправлена. Чекайте на двінок</p>
