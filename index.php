<?php 
include "action/connect.php"; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Project Monitoring</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script src="https://kit.fontawesome.com/206142bfe3.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css"/>
</head>
<body>
	<div class="container">
		<div class="back">
			<h5>Project Monitoring</h5>
			
            <form action="index.php" method="get">
				<input type="text" name="cari" <?php 
				if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						?> value="<?= $cari ?>"<?php
						} else {
				 ?>placeholder="search with project name <?php } ?>">
				<button><span class="fa fa-search"></span></button>
            </form>
            <div class="add">
				<a href="page/insert.php">Tambah Data <i class="fa-sharp fa-solid fa-plus"></i></a>
			</div>
			<table class="table table-borderless">
				<thead>
					<tr class="bg-light">
						<th>PROJECT NAME</th>
						<th>CLIENT</th>
						<th>PROJECT LEADER</th>
						<th>START DATE</th>
						<th>END DATE</th>
						<th class="prog">PROGRESS</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$project = mysqli_query($connect, "SELECT * from project where project_name like '%".$cari."%'");
					} else {
					$project = mysqli_query($connect, "SELECT * FROM project");
				}
					foreach($project as $row){
				 ?>
				<tbody>
					<tr>
						<td class="align-middle"><?= $row['project_name']; ?></td>
						<td class="align-middle"><?= $row['clien']; ?></td>
						<td>
							<table>
								<tr>
									<td rowspan="2" width="50px"><img src="img/<?= $row['img_leader']; ?>" class="rounded-circle" width="40px"></td>
									<td><b><?= $row['leader_name']; ?></b></td>
								</tr>
								<tr>
									<td><?= $row['leader_email']; ?></td>
								</tr>
							</table>
						</td>
						<td class="align-middle"><?= $row['start_date']; ?></td>
						<td class="align-middle"><?= $row['end_date']; ?></td>
						<td class="align-middle" style="padding-right: 20px;">
							 <div class="row">
                  <div class="col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-8 col-xs-offset-1">
                    <div class="progress">
                        <div class="progress-bar  active" role="progressbar" aria-valuenow="  45"     aria-valuemin="0" aria-valuemax="100" style="width: <?= $row['progres']; ?>%">
                        </div>
                    </div>
                  </div>
                  <div class="col-md-1 col-sm-1 col-xs-1 text-left"><?= $row['progres']; ?>%</div>
                </div>
						</td>
						<td class="align-middle">
							<div class="trash">
							<a href="action/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data project <?= $row['project_name']; ?>?')"><i class="fa-solid fa-trash"></i></a>
							</div>
							<div class="update">
								<a href="page/update.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-pen"></i></a>	
							</div>
							
						</td>
					</tr>
				</tbody>
				<?php } ?>
			</table>

		</div>
	</div>
</body>
</html>