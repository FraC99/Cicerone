<?php
$link=mysqli_connect("localhost", "root", "root","turisti")or die("Errore di connessione!");
  if(isset($_POST["turistaLogin"])) {
  $mail=$_POST['mail'];
  $password=$_POST['password'];
  if($mail=""||$password=""){
    echo "Non tutti i campi sono stati compilati";
  }
    else {
      $query="SELECT *from turista WHERE mail='$mail')";
      $result=mysqli_query($link, $query) or die("Mail non valida");
      if($result){
        $array=mysql_fetch_array($query);
        $nome=$array[nome];
        $cognome=$array[cognome];
        $password=$array[password];
        if($password==$password_db){
          session_start();
        }
      }else {
        echo "Utente non registrato";
      }
    }
    mysqli_close($link);
  }
 ?>
