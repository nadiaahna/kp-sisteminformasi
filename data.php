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
		<th>Nama Jalan</th>
		<th>Kelompok RD</th>
		<th>Status Hunian</th>
		
	</tr>
	<?php
	//koneksi ke database
	mysql_connect("localhost", "root", "bismillah");
	mysql_select_db("pusri");
	
	//query menampilkan data
	$sql = mysql_query("SELECT * FROM datapegawai ORDER BY No_Badge ASC");
	while($data = mysql_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$data['No_Badge'].'</td>
			<td>'.$data['Nama'].'</td>
			<td>'.$data['kode_rumah'].'</td>
			<td>'.$data['unit_kerja'].'</td>
			<td>'.$data['jabatan'].'</td>
			<td>'.$data['kelompok'].'</td>
			<td>'.$data['status'].'</td>
			<td>'.$data['Alamat'].'</td>
			
		</tr>
		';
	}
	?>
</table>
</body>
</html>