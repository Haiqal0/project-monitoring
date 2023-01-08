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
			<h4>Project Monitoring - Tambah Data</h4>
			
			<form action="../action/insert.php" enctype="multipart/form-data" method="POST">
			  <div class="form-group">
			    <label for="prname">Project Name</label>
			    <input type="text" class="form-control" id="prname" placeholder="Enter Project Name" required="" name="project_name">
			  </div>
			  <div class="form-group">
			    <label for="clien">Clien</label>
			    <input type="text" class="form-control" id="clien" placeholder="Enter Clien Name" required="" name="clien">
			  </div>
			  <div class="form-group p-2">
			    <label for="img">Leader Profile Pict</label>
			    <input type="file" class="form-control-file" id="img" required="" name="pict"><br>
			    <small class="form-text text-muted"><i class="fa-solid fa-circle-exclamation"></i> Input gambar berukuran 3x3cm.</small>
			  </div>
			  <div class="form-group">
			    <label for="lrname">Leader Name</label>
			    <input type="text" class="form-control" id="lrname" placeholder="Enter Leader Name" required="" name="leader_name">
			  </div>
			  <div class="form-group">
			    <label for="emaillr">Leader Email</label>
			    <input type="email" class="form-control" id="emaillr" placeholder="Enter email" required="" name="leader_email">
			  </div>
			  <div class="form-group">
			    <label for="date">Start Date</label>
			    <input type="date" class="form-control" id="date" required="" name="start_date">
			  </div>
			  <div class="form-group">
			    <label for="date2">Due Date</label>
			    <input type="date" class="form-control" id="date2" required="" name="end_date">
			  </div>

			  <div class="form-group">
			    <label for="prog">Progress</label>
			    <input type="number" class="form-control" id="prog" placeholder="Enter Your Project Progress Scale 1%-100%" name="progres">
			  </div><br>
			  <button type="submit" class="btn btn-primary">Submit</button>


			    <small class="form-text text-muted">Tambah data kedalam table project monitoring</small>
			</form>


		</div>
	</div>
</body>
</html>





