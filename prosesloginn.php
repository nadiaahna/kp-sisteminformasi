<?php
   session_start();
   require_once("config.php");
   $Nama = $_POST['Nama'];
   $No_Badge = $_POST['No_Badge'];
   $cekuser = mysql_query("SELECT * FROM users WHERE No_Badge = '$No_Badge'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     ?>
      <script>
      alert("Data Tidak Valid!");
      window.location.href='loginn.html';
      </script>
      <?php
   } else {
     if($No_Badge <> $hasil['No_Badge']) {
      ?>
      <script>
      alert("Data Tidak Valid! Silahkan Log In kembali..");
      window.location.href='loginn.html';
      </script>
      <?php
     } else {
       $_SESSION['Nama'] = $hasil['Nama'];
       header('location:indexn.php');
     }
   }
?>