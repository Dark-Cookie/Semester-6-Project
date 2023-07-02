<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<form action="log.php" method="post">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style >
		video{
	position: fixed;
	z-index: -1;
	right:0;
	bottom: 0;
}

.container {
	width: 300px;
	height: 450px;
	margin:7% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #fff;
}

.header {
	text-align: center;
 	padding-top: 75px;
  	
}

.header h1 {
	color: #fff;
	font-size: 45px;
	margin-bottom: 80px;
}

.main {
	text-align: center;
}

.main input, button {
	width: 270px;
	height: 45px;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	border:none;
	outline: none;
	padding-left: 38px;
	box-sizing: border-box;
	font-size: 15px;
	margin-bottom: 20px;
}

.main button {
	padding-left: 0;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}

.main button:hover {
	box-shadow: 2px 2px 5px #fff;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	}
.main input:hover {
	box-shadow: 2px 2px 5px #fff;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	}

.main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #fff;
	font-size: 16px;
	top: 2px;
}
.col{
	color: #fff;
}
	</style>
</head>
<body>

 <div class="container">
 	<div class="header">
 		<h1>Login</h1>
 	</div>
 	<div class="main">
 		<form>
 			<span>
 				
 				<input type="email" placeholder="Email" name="username"  id="username" required>
 			</span><br>
 			<span>
 				
 				<input type="password" placeholder="Password"  name="password" id="password" required>
 			</span><br>
 				<button class="col">Log In</button>
				 <br><font style="color: white;">  Not a member <a href="/From.html">Sign In</a></font>  
 		</form>
		 
 	</div>
 </div>
 <video autoplay muted loop>
 	<source src="video.mp4" >
 </video>
</body>
</form>
</html>
<?php
$con = mysqli_connect('localhost', 'root', '','db_connect2');

$Username = $_POST['username'];
$Password = $_POST['password'];



$sql = "INSERT INTO `tbl_contact2` (`ID`, `username`, `password`) VALUES ('0', '$Username', '$Password')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Have Been Recorded";
}

?>