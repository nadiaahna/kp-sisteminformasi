<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=datarumahdinas-export.xls");
 
// Tambahkan table
?>
<!DOCTYPE html>
<html>

<body>
<table border="1">
	<tr>
		<th>No. Badge</th>
		<th>Nama Pegawai</th>
		<th>Kode Rumah</th>
		<th>Unit Kerja</th>
		<th>Jabatan</th>
		<th>Alamat</th>
		<th>Kelompok RD</th>
		<th>Status Hunian</th>
		
	</tr>
	<?php 
	//koneksi ke database
	mysql_connect("localhost", "root", "bismillah");
	mysql_select_db("pusri");
	


	
                                       if(isset($_GET['exp'])&& !empty($_GET['exp'])){
                                            $cari = $_GET['exp'];
                                            $data = mysql_query("select * from datapegawai where No_Badge like '%".$cari."%' OR Nama like '%".$cari."%' OR Alamat like '%".$cari."%'");        
                                        }else{
                                            $data = mysql_query("select * from datapegawai");       
                                        }
                                        $No_Badge = 1;
                                        while($d = mysql_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $d['No_Badge']; ?></td>
                                            <td><?php echo $d['Nama']; ?></td>
                                            <td><?php echo $d['kode_rumah']; ?></td>
                                            <td><?php echo $d['unit_kerja']; ?></td>
                                             <td><?php echo $d['jabatan']; ?></td>
                                              <td><?php echo $d['kelompok']; ?></td>
                                               <td><?php echo $d['status']; ?></td>
                                            <td><?php echo $d['Alamat']; ?></td>
                                            
                                            
                                           
                                        </tr>
                                        <?php } ?>
</table>
</body>
</html>