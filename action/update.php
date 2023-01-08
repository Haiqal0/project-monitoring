<?php 
include "connect.php";

$id = $_POST['id'];
$project_name = $_POST['project_name'];
$clien = $_POST['clien'];
$leader_name = $_POST['leader_name'];
$leader_email = $_POST['leader_email'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$progres = $_POST['progres'];

$sql = "UPDATE project SET project_name = '$project_name', clien = '$clien', leader_name = '$leader_name', leader_email = '$leader_email', start_date = '$start_date', end_date = '$end_date', progres = '$progres' WHERE id = $id";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:../index.php");
	echo "<script>
			alert('Berhasil Diubah!');
		  </script>";
} else {
	echo mysqli_error($connect);
}
?>