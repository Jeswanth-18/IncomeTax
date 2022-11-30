<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body style="background-color:lightgray;">
	<?php include 'navbar.php'; ?>
	<style>
		/*.col-sm-12{
			margin-left: 20%;
		}*/
	</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <div class="container-fluid">
  	<div style="margin-left: 50px;"><a href="index.php" class="nav-link" style="color:black;display: inline-block;">Home</a>/<a href="#" class="nav-link" style="display: inline-block;color: black;">Admin Dashboard</a></div>
  </div></nav>	
<div class="container-fluid">
	<div class="container bg-white text-center text-sm-center" style="margin-top:30px; height:100%; box-shadow: 2px 2px 6px 6px gray;">
		<div class="row" style="padding-top:50px;">
			<div class="col-lg-2 col-sm-12">
				<a href=""><img src="images/student.png" class="img-fluid" aspect-ratio="860/506" width="100"></a>
				<h6>Students Information</h6>
			</div>
			<div class="col-lg-2 col-sm-12">
				<a href=""><img src="images/class.png" class="img-fluid" aspect-ratio="900/598" width="100"></a>
				<h6>Manage Class</h6>
			</div>
			<div class="col-lg-2 col-sm-12">
				<a href=""><img src="images/attend.png" class="img-fluid" aspect-ratio="258/195" width="80"></a>
				<h6>Attendance Monitoring</h6>
			</div>
			<div class="col-lg-2 col-sm-12">
				<a href=""><img src="images/tc.png" class="img-fluid" aspect-ratio="840/859" width="80"></a>
				<h6>Student TC'S</h6>
			</div>
			<div class="col-lg-2 col-sm-12">
				<a href="manage_employ.php"><img src="images/employe.png" class="img-fluid" aspect-ratio="900/433" width="140"></a>
				<h6>Manage Employees</h6>
			</div>
			<div class="col-lg-2 col-sm-12">
				<a href=""><img src="images/pay.png" class="img-fluid" aspect-ratio="860/896" width="80"></a>
				<h6>Exam Fee Payment</h6>
			</div>
		</div>
		<div class="row" style="padding-top:50px;">
			<div class="col-sm-12 col-lg-2 col-md-6">
			<a href=""><img src="images/apart.png" class="img-fluid" aspect-ratio="360/360" width="100"></a>
			<h6>Quarters Allotment</h6>
		</div>
		</div>
	</div>
	
</div>
</body>
</html>