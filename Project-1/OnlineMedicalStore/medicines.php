<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Online Medical Store</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
								<style>
table, th, td {
    border: 1px solid black;
}
</style>

	</head>
	<body>
		<div id="page">
			<div id="header">
				<a href="index.html" id="logo"><img src="images/logo.gif" alt="logo"/></a>
				<ul id="navigation">
					<li><a href="index.html">home</a></li>
					<li><a href="about.html">about us</a></li>
					<li><a href="services.html">services</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="about.html">contact us</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="navigation">
					<ul>
						<li id="link1"><a href="index.html">HOME</a></li>
						<li id="link2"><a href="services.html">Our Services</a></li>
						<li id="link3"><a href="services.html">OFFERS</a></li>
					</ul>
					<ul id="buttons">
					  <li><a href="register.php">Register</a></li>
					  <li><a href="Blood.php">Blood Need</a></li>
					  <li class="selected"><a href="medicines.php">Find Medicines</a></li>
					</ul>
				</div>
				<div>
					<h2>MEdicines </h2>
					<p>&nbsp;</p>
					<form action="" method="">
						<table cellspacing="10">
	

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddonator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Company, usages, quantities, price FROM medicines";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>company</th><th>usages</th><th>quantities</th><th>price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Company"]. "</td><td> " . $row["usages"]. "</td><td> " . $row["quantities"]. "</td><td> " . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

						</table>
					</form>
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
						<tr><td><label>Email</label></td><td>:</td><td>ahmed.mostafa@northsouth.edu</td></tr>
						<tr><td><label>Address</label></td><td>:</td><td>Block B, Road: 10, Bashundhara, Dhaka</td></tr>
						<tr><td><label>Phone</label></td><td>:</td><td>017-09133311</td></tr>
						<tr><td><label>Follow us</label></td><td>:</td>
							<td>
								
								<a href="http://facebook.com/aryanahmed.sunny" target="_blank" class="fb"></a>
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


