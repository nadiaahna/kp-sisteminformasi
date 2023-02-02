<?php
   session_start();
   require_once("config.php");
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cekuser = mysql_query("SELECT * FROM user WHERE email = '$email'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     ?>
      <script>
      alert("Email belum terdaftar");
      window.location.href='login.html';
      </script>
      <?php
   } else {
     if($password <> $hasil['password']) {
      ?>
      <script>
      alert("Password salah! Silahkan Log In kembali..");
      window.location.href='login.html';
      </script>
      <?php
     } else {
       $_SESSION['email'] = $hasil['email'];
       header('location:indexm.php');
     }
   }
?>