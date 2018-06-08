<!DOCTYPE html>
<html>
<head>
	<title>school mgt system</title>
	<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.css">
	<style type="text/css">
		h2{
			font-family: purisa;
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
				<li class="active"><a href="#">Studentdetails</a></li>
			</ul>
		</div>
	</nav>

	
	<h2>Student Exams Entry</h2>
	<div class="jumbotron">
	<fieldset>
	<form action="second.php" method="POST">
		<input type="text" name="studentname" placeholder="Enter Name Here" required=""><br>
		<label>English</label><br>
		<input type="text" name="eng" required="" maxlength="2"><br>
		<label>Maths</label><br>
		<input type="text" name="math" required="" maxlength="3"><br>
		<label>Kiswahili</label><br>
		<input type="text" name="swa" required="" maxlength="3"><br>
		<label>History</label><br>
		<input type="text" name="hist" required="" maxlength="3"><br>
		<label>physics</label><br>
		<input type="text" name="phic" required="" maxlength="3"><br>
		<label>biology</label><br>
		<input type="text" name="bio" required="" maxlength="3"><br>
		<input type="submit" value="SUBMIT">
	</form>
	</fieldset>
	</div>
	<div>
			<footer style="text-align: center; padding:50px; font-size: 18px;">
				copyright &copy;Ted Blair <br>
				+2547972728490 <br>
				&reg;Northstar School
			</footer>
		</div>

</body>
</html>