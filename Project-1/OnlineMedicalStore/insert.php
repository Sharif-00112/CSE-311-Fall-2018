<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Online Medical Store</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="page">
			<div id="header">
				<a href="index.html" id="logo"><img src="images/logo.gif" alt="logo"/></a>
				<ul id="navigation">
					<li><a href="index.html">home</a></li>
					<li class="selected"><a href="about.html">about us</a></li>
					<li><a href="services.html">services</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="about.html">contact us</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="navigation">
					<ul>
					  <li id="link1"><a href="index.html">home</a></li>
					  <li id="link2"><a href="services.html">OUR services</a></li>
					  <li id="link3"><a href="services.html">offers</a></li>
					</ul>
					<ul id="buttons">
					  <li><a href="register.php">Register</a></li>
					  <li><a href="blood.php">Blood Need</a></li>
					  <li><a href="medicines.php">Find Medicines</a></li>
					</ul>
				</div>
				<div>
					<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddonator";
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$bloodGrp = mysqli_real_escape_string($link, $_REQUEST['bloodGrp']);
 
// attempt insert query execution
$sql = "INSERT INTO persons (Name, Address, City, phone, email, Gender, bloodGrp) VALUES ('$name', '$address', '$city','$phone','$email','$Gender','$bloodGrp')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

echo "Hello World!";

// close connection
mysqli_close($link);
?>
					<p>&nbsp;</p>
				</div>
			</div>
			<div id="footer">
				<div class="blog">
					<h2>Blog</h2>
					<ol>
					  <li><a href="blog.html">“The greatest disease in the West today is not TB or leprosy........</a></li>
				      </li>
				      <li><a href="blog.html">“Always laugh when you can, it is cheap medicine.” ― George Gordon Byron </a>
			          </li>
				      <li><a href="blog.html">“Let food be thy medicine and medicine be thy food.” ― Hippocrates</a>
			          </li>
				      <li><a href="blog.html">“After you find out all the things that can go wrong...&nbsp;― Chuck Palahniuk, Choke</a>
			          </li>
					</ol>
				</div>
				<div class="section">
					
					<h2>Get in touch</h2>
					<table>
						<tr><td><label>Email</label></td><td>:</td><td>sharif.hossain02@northsouth.edu</td></tr>
						<tr><td><label>Address</label></td><td>:</td><td>Block B, Road: 10, Bashundhara, Dhaka</td></tr>
						<tr><td><label>Phone</label></td><td>:</td><td>01703768701</td></tr>
						<tr><td><label>Follow us</label></td><td>:</td>
							<td>
								
								<a href="http://facebook.com/sharif.00112" target="_blank" class="fb"></a>
							</td>
						</tr>
					</table>
				</div>
				<ul class="navigation">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="contact-us.html">Contact Us</a></li>
					<li><a href="question.html">Help</a></li>
				</ul>
				<p id="footnote">&#169; Copyright &#169; 2018. Online Madical Store all rights reserved</p>
			</div>
		</div>
	</body>
</html>


