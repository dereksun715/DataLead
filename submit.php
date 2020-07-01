<?php
$connection = mysqli_connect("localhost", "root", "","leadclients");
if ($connection === false){
	die("ERROR: Could not connect ". mysqli_connect_error());
}
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$postcode = mysqli_real_escape_string($link, $_REQUEST['postcode']);

$sql = "INSERT INTO clientinfo (firstname, lastname, email, postcode) VALUES ('$firstname', '$lastname','$email','$postcode')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($connection);
?>

<?php
if ( 
	isset($_POST['last']) #just a way to detect if came from reg page as that is the only page that will pass 'last' on my website
	)
		{
			$lastname = $_POST['lastname'];
			$email= $_POST['email'];
			$postcode= $_POST['postcode'];
			$title = $_POST['title'];
								$inters=[]; #blank array
								#Create an array, check if variable(radio) was checked, if so, put value into array, if not fill wit blank. always in same order making things much easier
								if (isset($_POST['i1'])){array_push($inters, "x");}else{array_push($inters, "");} #Music
								if (isset($_POST['i2'])){array_push($inters, "x");}else{array_push($inters, "");} #Games
								if (isset($_POST['i3'])){array_push($inters, "x");}else{array_push($inters, "");} #Cars
								if (isset($_POST['i4'])){array_push($inters, "x");}else{array_push($inters, "");} #Animals
								if (isset($_POST['i5'])){array_push($inters, "x");}else{array_push($inters, "");} #Computers

								$sql = "SELECT * FROM contacts WHERE contacts.lastname='$lastname' AND contacts.email='$email'";
								$result = mysqli_query($conn, $sql);
								$row_count=mysqli_num_rows($result);
								if ($row_count != 0)
								{
									echo "<h5> Name already exists </h5>";
									echo "<br />";
									echo "<h5> Please try to register again with a different name/email </h5>";
								}
								else {
									echo "<h3> Thank you " . $title . "." . $lastname . ". You have been successfully registered. </h3>";
									$sql2 = "INSERT INTO contacts (title,last,first,email,phone,country,province) VALUES ('$title','$last','$first','$email','$phone','Canada','$province');"; #Assumed country
									#if we had a blank database the province system would be entireley broken.
									if ($conn->query($sql2) === TRUE) 
									{
										echo "<img id='subpic'src='images/guys1.jpg' alt='guys' />";
					#					echo "<h3> New record created successfully </h3>";			
										$sql3 = "INSERT INTO interests (Music,Games,Cars,Animals,Computers,fk) VALUES ('$inters[0]','$inters[1]','$inters[2]','$inters[3]','$inters[4]', (SELECT pk FROM contacts ORDER BY pk DESC LIMIT 1) );";
										$result = mysqli_query($conn, $sql3);
										mysqli_free_result($result);
										mysqli_close($conn);
									} 								
				 				}
							}
					?>
							<script language="javascript">
			var num = 10; 
			var URL = "main.html";
			window.setTimeout("doUpdate()", 1000);
			function doUpdate(){
				if(num != 0){
					document.getElementById('page_div').innerHTML = 'Will Automatic Back to the Main Page After '+num+' Seconds' ;
					num --;
					window.setTimeout("doUpdate()", 1000);
				}else{
					num = 10;
					window.location = URL;
				}
			}
		</script>