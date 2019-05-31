  <?php
    $link=mysqli_connect("localhost", "root", "root","ciceroni")or die("Errore connessione!");
    if(isset($_POST["invia_dati"])){
      $nome=$_POST['nome'];
      $cognome=$_POST['cognome'];
      $telefono=$_POST['telefono'];
      $mail=$_POST['mail'];
      $password=$_POST['password'];
      $password2=$_POST['password2'];
      $citta=$_POST['citta'];
      $lingua=$_POST['lingua'];
      $lingua2=$_POST['lingua2'];
      $lingua3=$_POST['lingua3'];

      if($nome==""||$cognome==""||$password=""||$password2=""||$mail==""||$citta==""||$telefono==""||$lingua==""){
        echo "Non tutti i campi sono stati compilati";
      }elseif($password!=$password2){
        echo "Le password non coincidono";
      }else {
        $query="INSERT INTO cicero(nome, cognome, telefono, mail, password, citta, lingua)VALUES('$nome', '$cognome','$telefono','$mail','$password', '$citta','$lingua')";
        $result=mysqli_query($link, $query)or die("Errore di registrazione! Controlla di aver compilato tutti i campi.");
        if($lingua2!=""){
          $query2="UPDATE cicero SET lingua2 = '$lingua2' WHERE mail = '$mail'";
          $result2=mysqli_query($link, $query2);
        }
        if($lingua3!=""){
          $query3="UPDATE cicero SET lingua3 = '$lingua3' WHERE mail = '$mail'";
          $result3=mysqli_query($link, $query3);
        }
        if($result){
          echo "Registrazione effettuata!<br/><a href='loginCicerone.php'>Entra</a>";
        }
      }
      mysqli_close($link);
    }
  ?>
