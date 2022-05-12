<?php
if (isset($_POST['email'])) {

  //Informacao de email
  $admin_email = "MZfinanças@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  //Enviando email para a empresa
  mail($admin_email, "New Form Submission", $message . '
  - ' . $phone, "Para:" . $email);

  header('Location: ./success.html');
}