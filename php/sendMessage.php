<?php

if (isset($_POST['submit'])) {

  ini_set('display_errors',1);
  $name = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $email = $_POST['email'];
  $title = $_POST['naslov'];
  $tekst = $_POST['poruka'];
  $type = $_POST['tporuke'];
  $brojtel = $_POST['brtel'];


if(!empty($name) && !empty($prezime) && !empty($email) && !empty($title) && !empty($tekst) && !empty($brojtel)){

  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      header("Location: ../index.php?contact=emailError#contct");
  }
  else {

    if (!preg_match("/^[+0-9]*$/", $brojtel)) {
      header("Location: ../index.php?contact=numberError#contct");
    }

    else {

      if (mail("penedren@gmail.com", "Type: ".$type.".Title: ".$title."\r\n" , "Name of sender: ". $name." ".$prezime.". Broj telefona: ".$brojtel."\n\n".$tekst,"From: ".$email)) {
        header("Location: ../index.php?contact=successSend#contct");
      }

      else {
        header("Location: ../index.php?contact=error#contct");
      }
  }
}
  }
  else {
  header("Location: ../index.php?contact=empty#contct");
  }
}
 ?>
