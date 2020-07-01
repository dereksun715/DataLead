<?php
$connection = mysqli_connect("localhost", "root", "","leadclients");
if ($connection === false){
	die("ERROR: Could not connect ". mysqli_connect_error());
}
if(isset($_POST['submit'])){ 
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$postcode = $_POST['postcode'];
if($lastname !=''||$email !=''){
$sql = mysqli_query($connection,"insert into clientinfo(ln, email, address) values ('$lastname', '$email', '$postcode')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); 
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>Data Lead Foundation</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<style>
</style>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
</head>
<body>
	<header>
		<a href="index.html"><img class="logo" src="images/LOGO.png" alt="logo"></a>
	</header>
	<nav>
		<div id="copyright">
		<a href=""><img class="icon" src="images/facebook.png" alt="facebookicon"></a>
		<a href=""><img class="icon" src="images/ins.png" alt="insicon"></a>
		<a href=""><img class="icon" src="images/twiter.png" alt="twitericon"></a>
		<a href="https://github.com/dereksun715/DataLead"><img class="icon" src="images/github.png" alt="githubicon"></a>
		</div>
		<ul>
			<li><a href="main.html">about us</a></li>
			<li><a href="form.php">services&amp;support</a></li>
		</ul>
	</nav>
	<hr />
	<main>
		<h2>Congratulations !</h2>
		<h3>You have succeed applied a support and services with Data Lead Foundation. To provide a better support, we will contact with you within 3 business days.</h3>
		<p id="page_div">Will Automatic Back to the Main Page After 10 Seconds</p>

		<img src="images/kids3.jpg" alt="kids">
	</main>
	<footer>
		<p>&copy; 2020 Data Lead. All rights reserved.</p>
	</footer>
</body>
</html>
