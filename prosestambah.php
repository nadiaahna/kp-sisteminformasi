<?php
 
 		// include database connection file
  require_once("config.php");
				
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$No_Badge = $_POST['No_Badge'];
		$Nama = $_POST['Nama'];
		$kode_rumah=$_POST['kode_rumah'];
        $unit_kerja=$_POST['unit_kerja'];
        $jabatan=$_POST['jabatan'];
        $kelompok=$_POST['kelompok'];
        $status=$_POST['status'];
		$Alamat = $_POST['Alamat'];
		
        
		// Insert user data into table
		$result = mysql_query("INSERT INTO datapegawai(No_Badge,Nama,Alamat) VALUES ('$No_Badge','$Nama','$Alamat')");
    if (!$result) {
        echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
    } else {
      echo "<script>alert('Berhasil di tambahkan!');history.go(-2);</script>";
    }
    $_POST['Submit'] = false;
	}
	?>