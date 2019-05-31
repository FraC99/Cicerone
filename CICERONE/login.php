
 <?php
  $link=mysqli_connect("localhost", "root", "root","ciceroni")or die("Errore di connessione!");
    if(isset($_POST["login"])) {
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    if($mail=""||$password=""){
      echo "Non tutti i campi sono stati compilati";
    }
      else {
        $query="SELECT *from cicero WHERE mail='$mail' and password='$password'";
        $result=mysqli_query($link, $query);
      }
        if(!$result){
          $query="SELECT *from turista WHERE mail='$mail' and password='$password'";
          $result=mysqli_query($link, $query)or die("Dati di accesso non validi");
        }
          mysqli_close($link);
      }










     // or die("Dati di accesso non validi");
     //    if($result){
     //      $array=mysql_fetch_array($query);
     //      $nome=$array[nome];
     //      $cognome=$array[cognome];
     //      $password=$array[password];
     //      echo "accesso effettuato";


   ?>
