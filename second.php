<!DOCTYPE html>
<html>
<head>
	<title>teacher</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		li a{
			padding: 20px;
			border-radius: 3px;
		}
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
			<a href="" class="navbar-brand">Northstar school</a>
		</div>
			<ul class="navbar-nav">
				<li><a href="home.php">Home</a></li>
				<li><a href="index.php">Studentdetails</a></li>
			</ul>
		</div>
	</nav>



<?php
	$studentname="";
	$eng="";
	$math="";
	$swa="";
	$hist="";
	$phic="";
	$bio="";

	$studentname=$_POST['studentname'];
	$eng=$_POST['eng'];
	$math=$_POST['math'];
	$swa=$_POST['swa'];
	$hist=$_POST['hist'];
	$phic=$_POST['phic'];
	$bio=$_POST['bio'];

	echo "Studentname is $studentname.";
	echo "<br><br>";

	echo "<table border 2px>
			<tr>
			<th>Subjects</th>
			<th>English</th>
			<th>Maths</th>
			<th>Kiswahili</th>
			<th>History</th>
			<th>Phyisics</th>
			<th>Biology</th>
			</tr>
			<tr>
			<td>Marks</td>
			<td>$eng</td>
			<td>$math</td>
			<td>$swa</td>
			<td>$hist</td>
			<td>$phic</td>
			<td>$bio</td>
			</tr>


			</table>";
			echo "<br><br>";

	$average=($eng+$math+$swa+$hist+$phic+$bio)/6;
	echo "Students average marks is $average.";
	echo "<br>";
	
	if ($average>=80) {
		# code...
		echo "Grade A";
	}
	elseif($average>=70){
		echo "Grade B+";
	}
	elseif ($average>=60) {
		# code...
		echo "Grade B";
	}
	elseif ($average>=50) {
		# code...
		echo "Grade C";
	}
	elseif ($average>=40) {
		# code...
		echo "Grade D";
	}
	else{
		echo "Grade E";
	}
 ?>
 <div>
			<footer style="text-align: center; padding:50px; font-size: 18px;">
				copyright &copy;Ted Blair <br>
				+2547972728490 <br>
				&reg;Northstar School
			</footer>
		</div>

</body>
</html>








