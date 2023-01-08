<?php 
include "../action/connect.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM project WHERE id = $id");
$data = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Project Monitoring</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script src="https://kit.fontawesome.com/206142bfe3.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css"/>
</head>
<body>
	<div class="container">
		<div class="insert">
			<h4>Project Monitoring - Update Data</h4>
			
			<form action="../action/update.php" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="id" value="<?= $data['id'] ?>">
			  <div class="form-group">
			    <label for="prname">Project Name</label>
			    <input type="text" class="form-control" id="prname" value="<?= $data['project_name'] ?>" required="" name="project_name">
			  </div>
			  <div class="form-group">
			    <label for="clien">Clien</label>
			    <input type="text" class="form-control" id="clien" value="<?= $data['clien'] ?>" required="" name="clien">
			  </div>
			  <div class="form-group">
			    <label for="lrname">Leader Name</label>
			    <input type="text" class="form-control" id="lrname" value="<?= $data['leader_name'] ?>" required="" name="leader_name">
			  </div>
			  <div class="form-group">
			    <label for="emaillr">Leader Email</label>
			    <input type="email" class="form-control" id="emaillr" value="<?= $data['leader_email'] ?>" required="" name="leader_email">
			  </div>
			  <div class="form-group">
			    <label for="date">Start Date</label>
			    <input type="text" class="form-control" id="date" required="" name="start_date" value="<?= $data['start_date'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="date2">Due Date</label>
			    <input type="text" class="form-control" id="date2" required="" name="end_date" value="<?= $data['end_date'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="prog">Progress</label>
			    <input type="number" class="form-control" id="prog" value="<?= $data['progres'] ?>" name="progres">
			  </div><br>
			  <button type="submit" class="btn btn-primary">Update</button>


			    <small class="form-text text-muted">Ubah data project <?= $data['project_name'] ?></small>
			</form>


		</div>
	</div>
</body>
</html>





