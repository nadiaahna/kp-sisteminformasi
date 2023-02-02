<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
if(isset($_GET['No_Badge'])){
	$No_Badge = $_GET['No_Badge'];
$result = mysql_query("DELETE FROM datapegawai WHERE No_Badge=$No_Badge");
if(result){
	header("Location:indexm.php");
}
else{
	?>
	<script>
	alert("fail delete data");
	window.location.href='indexm.php';
	</script>
	<?php
	}
}

?>