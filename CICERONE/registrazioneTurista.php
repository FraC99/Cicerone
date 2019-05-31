
    <?php
      $link=mysqli_connect("localhost", "root", "root","turisti" )or die("Errore di connessione!");
      if((isset($_POST['invia_dati_turista']))){
      $nome=$_POST['nome'];
      $cognome=$_POST['cognome'];
      $mail=$_POST['mail'];
      $password=$_POST['password'];
      $password2=$_POST['password2'];
      $lingua=$_POST['lingua'];

      if($nome==""||$cognome==""||$password=""||$password2=""||$mail==""){
        echo "Non tutti i campi sono stati compilati";
      }elseif($password!=$password2){
        echo "Le password non coincidono";
      }else {
        $query="INSERT into turista(nome, cognome,telefono, mail, password,lingua)values('$nome', '$cognome','$telefono','$mail','$password','$lingua')";
        $result=mysqli_query($link, $query)or die("Errore di registrazione!");
        if($result){
          echo "Registrazione effettuata!<br/><a href='loginTurista.php'>Entra</a>";
        }
      }
    mysqli_close($link);
  }
  ?>
