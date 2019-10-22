<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: POST");

    $name       = $_POST['name'] ?? "";
    $email       = $_POST['email'] ?? "";
    $subject    = $_POST['subject'] ?? "";
    $message    = $_POST['message'] ?? "";
    $from       = 'Contato Website Churras Curitiba' ?? "";
    $to         = 'brendonbrds12@gmail.com' ?? "";//replace with your email
    $data_envio = date('d/m/Y')?? null;
    $hora_envio = date('H:i:s')?? null;

    $body = "
        \nDe: $name\n
        \nE-mail: $email\n
        \nAssunto: $subject\n
        \nMenssagem: $message\n
    ";

     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: $name <$from>';
    
    $enviaremail = mail($to, $subject, $body);

    if($enviaremail){
  $msg = "Email successfully sent";
  
  } else {
  $msg = "Error sending email, please try again later";
  }
  echo $msg;

?>