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
		.col-lg-1{
			border:1px solid;
			text-align: center;
		}
		.col-lg-1:hover{
			background-color: skyblue;
		}

	</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <div class="container-fluid">
  	<div style="margin-left: 50px;"><a href="index.php" class="nav-link" style="color:black;display: inline-block;">Home</a>/<a href="admin_console.php" class="nav-link" style="display: inline-block;color: black;">Admin Dashboard</a>/<a href="#"  class="nav-link" style="color:black;display: inline-block;">Establishment Home</a></div>
  </div></nav>

<div class="container-fluid"  style="width: 1330px;background-color: white;margin-top: 20px;">
	<div class="container-fluid">
		<h1>Employee Info</h1>
	</div>
	<div class="container-fluid">
		<div style="margin-left:1000px;"><a href="index.php" class="nav-link" style="color:black;display: inline-block;">Home</a><a href="#" class="nav-link" style="display: inline-block;color: black;">Manage Employee</a></div>
  </div>
  <hr>
  <div class="container-fluid">
  	<button style="background-color:white;margin-left:800px;border-width: 1px;"><img src="images/1.png" height="20" width="20">Search</button>
  	<button style="background-color:white;border-width: 1px;"><img src="images/print.png" height="20" width="20">Print</button>
  	<button style="background-color:white;border-width: 1px;"><img src="images/2.png" height="20" width="20">Export CSV</button>
  	<button style="background-color:white;border-width: 1px;"><img src="images/2.png" height="20" width="20">Export Salary Statements</button>
  </div>
  <div class="container-fluid" id="1">
  <table class="table table-bordered" style="margin-top: 10px;">
    <thead>
      <tr class="bg-light">
        <th>Sno</th>
        <th>Eid</th>
        <th>Isresigned</th>
        <th>Image</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Department</th>
        <th>Mobileno</th>
        <th>Email</th>
        <th>DateOfJoining</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>1</td>
      	<td>080311N</td>
      	<td>No</td>
      	<td></td>
      	<td>SURE VEERA VENKATRAO</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>9948590390</td>
      	<td>venkat.s.v.chem@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>2</td>
      	<td>080312N</td>
      	<td>No</td>
      	<td></td>
      	<td>DEVANABOYINA NAGENDRA</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>9948412883</td>
      	<td>nagendra.devanaboyina@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>3</td>
      	<td>080313N</td>
      	<td>No</td>
      	<td></td>
      	<td>APARNA TIRUMALASETTI</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>9948933459</td>
      	<td>aparnatirumalasetti@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>4</td>
      	<td>080315N</td>
      	<td>No</td>
      	<td></td>
      	<td>Ms.MANJULADEVI KAVALA</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>7702417289</td>
      	<td>manjuladevik7@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>5</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>6</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>7</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>8</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>9</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>10</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>11</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>12</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>13</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>14</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>15</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      <td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>16</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>17</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>18</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>19</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>20</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
    </tbody>
  </table>
	</div>

	<div class="container-fluid" id="2" style="display: none;">
  <table class="table table-bordered" style="margin-top: 10px;">
    <thead>
      <tr class="bg-light">
        <th>Sno</th>
        <th>Eid</th>
        <th>Isresigned</th>
        <th>Image</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Department</th>
        <th>Mobileno</th>
        <th>Email</th>
        <th>DateOfJoining</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>21</td>
      	<td>080311N</td>
      	<td>No</td>
      	<td></td>
      	<td>SURE VEERA VENKATRAO</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>9948590390</td>
      	<td>venkat.s.v.chem@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>22</td>
      	<td>080312N</td>
      	<td>No</td>
      	<td></td>
      	<td>DEVANABOYINA NAGENDRA</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>9948412883</td>
      	<td>nagendra.devanaboyina@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>23</td>
      	<td>080313N</td>
      	<td>No</td>
      	<td></td>
      	<td>APARNA TIRUMALASETTI</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>9948933459</td>
      	<td>aparnatirumalasetti@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>24</td>
      	<td>080315N</td>
      	<td>No</td>
      	<td></td>
      	<td>Ms.MANJULADEVI KAVALA</td>
      	<td>Mentor</td>
      	<td>Chemistry</td>
      	<td>7702417289</td>
      	<td>manjuladevik7@rguktn.ac.in</td>
      	<td>05.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>25</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>26</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>27</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>28</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>29</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>30</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>31</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>32</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>33</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>34</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>35</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      <td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>36</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>37</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>38</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>39</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
      <tr>
      	<td>40</td>
      	<td>080808N</td>
      	<td>No</td>
      	<td></td>
      	<td>Mr.TUNGALA CHAKRAVARTHI</td>
      	<td>Mentor</td>
      	<td>English</td>
      	<td>9110310673</td>
      	<td>charky.t@rguktn.ac.in</td>
      	<td>14.11.2008</td>
      	<td><a href="#"><img src="images/tax.png" width="50" height="50"></a></td>
      </tr>
    </tbody>
  </table>
	</div>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-lg-1" id="f1" onclick="one();">1</div>
  		<div class="col-lg-1" id="f2" onclick="two();">2</div>
  		<div class="col-lg-1" id="f3">3</div>
  		<div class="col-lg-1" id="f4">4</div>
  		<div class="col-lg-1" id="f5">5</div>
  		<div class="col-lg-1" id="f6">6</div>
  		<div class="col-lg-1" id="f7">7</div>
  		<div class="col-lg-1" id="f8">8</div>
  		<div class="col-lg-1" id="f9">9</div>
  		<div class="col-lg-1" id="f10">10</div>
  		<div class="col-lg-1" id="f11">11</div>
  		<div class="col-lg-1" id="f12">12</div>

  	</div>
  </div>
	</div>
<script type="text/javascript">
	function one(){
		document.getElementById("1").style.display="block";
		document.getElementById("2").style.display="none";

	}
	function two(){
		document.getElementById("2").style.display="block";
		document.getElementById("1").style.display="none";

	}
</script>

</body>
</html>