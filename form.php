<?php
$connection = mysqli_connect("localhost", "root", "","leadclients");
if ($connection === false){
	die("ERROR: Could not connect ". mysqli_connect_error());
}
if(isset($_POST['submit'])){ 
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$postcode = $_POST['postcode'];
if($name !=''||$email !=''){
$sql = mysql_query("insert into clientinfo(ln, email, address) values ('$last', '$email', '$postcode')");
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
.details{
	width:500px;
	height: 100%;
	margin-bottom: 150px;
}
.detailspic{
	float: right;
}
.formpic{
	float: right;
}
.required{
	color: red;
}
.field{
	width: 0px;
}
.submit{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
form{
	clear:both;
	font-weight: bold;
}
footer{
	margin-top: 50px;
	clear: both;
	padding: 1px;
}
</style>

<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
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
	<script language="javascript">
	function chkinput(form)
	{
		if(form.email.value=="")
		{
			alert("Email Address cannot be empty!");
			return false;
		}
		if(form.cellphone.value=="")
		{
			alert("Cellphone Number cannot be empty!");
			return false;
		}
		if(form.firstname.value=="")
		{
			alert("First Name cannot be empty!");
			return false;
		}
		if(form.lastname.value=="")
		{
			alert("Last Name cannot be empty!");
			return false;
		}
		if(form.postcode.value=="")
		{
			alert("Post Code cannot be empty!");
			return false;
		}
		return true;
	}
	</script>
	<main>
		<form action="summary.php" method="POST" onsubmit="return chkinput(this)">
			<h1>Need a Services&amp;Support?</h1>
			<hr />
			<img class="formpic" src="images/kids1.jpg">
			<fieldset class="field">
			<label>Titles: <span class="required">*</span></label><br />
			<select name="title" id="you">
				<option value="o1">Mr.</option>
				<option value="o2">Mrs.</option>
				<option value="o3">Miss.</option>
				<option value="o4">Ms.</option>
			</select><br /><br />
			<label>Full Name: <span class="required">*<span></label><br /><input type="text" name="firstname" placeholder="First">
			<input type="text" name="lastname" placeholder="Last"><br />
			<label>Email: <span class="required">*<span></label><br />
			<input type="text" name="email"><br />
			<label>Cell Phone Number: <span class="required">*<span></label><br /><input type="text" name="cellphone" tableindex="2"><br />
			<label>Home Phone Number: </label><br /><input type="text" name="homephone"><br /><br />
			<dl>
				<dt>Address</dt><br />
				<dd>Street: <span class="required">*<span></dd><input type="text" name="street">
				<dd>City: <span class="required">*<span></dd><input type="text" name="City">
				<dd>Province: <span class="required">*<span></dd><input type="text" name="Province">
				<dd>Post Code: <span class="required">*<span></dd><input type="text" name="postcode">
			</dl>
			<dl>
				<dt>Gender of Your Child<span class="required">*</span></dt>
				<dd>Boy: <input type="radio" name="sex" value="boy"></dd>
				<dd>Girl: <input type="radio" name="sex" value="girl"></dd>
			</dl>
			<label>Messages</label><br /><textarea name="messages" rows="6" cols="70">Enter more Information here</textarea><br /><br />
			<input class="submit" type="submit" name="submit" value="Submit">
			</fieldset>
		</form>
	</main>
	<footer>
		<p>&copy; 2020 Data Lead. All rights reserved.</p>
	</footer>
</body>
</html>