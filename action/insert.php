<?php 
include "connect.php";

$project_name = $_POST['project_name'];
$clien = $_POST['clien'];
$leader_name = $_POST['leader_name'];
$leader_email = $_POST['leader_email'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$progres = $_POST['progres'];

$nama_file = $_FILES['pict']['name'];
$ukuran_file = $_FILES['pict']['size'];
$tipe_file = $_FILES['pict']['type'];
$tmp_file = $_FILES['pict']['tmp_name'];

$path = "../img/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  if($ukuran_file <= 1000000){
    if(move_uploaded_file($tmp_file, $path)){ 
      	$sql = "INSERT INTO project (project_name, clien, img_leader, leader_name, leader_email, start_date, end_date, progres)
VALUES ('$project_name', '$clien', '".$nama_file."', '$leader_name', '$leader_email', '$start_date', '$end_date', '$progres')";
        if (mysqli_query($connect, $sql)) {
		  header("Location:../index.php");
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
		}

		mysqli_close($connect);
      
    }else{
      echo "Maaf, Gambar gagal untuk diupload.";
    }
  }else{
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
  }
}else{
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
}




?>
 