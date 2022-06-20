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
					<li><a href="about.html">about us</a></li>
					<li><a href="services.html">services</a></li>
					<li class="selected"><a href="register.php">Register</a></li>
					<li><a href="about.html">contact us</a></li>
				</ul>
			</div>
			<div class="content">
				<div class="navigation">
					<ul>
						<li id="link1"><a href="index.html">Home</a></li>
						<li id="link2"><a href="cosmetic.html">Our Services</a></li>
						<li id="link3"><a href="consultation.html">OFFERS</a></li>
					</ul>
					<ul id="buttons">
						<li class="selected"><a href="register.php">Register</a></li>
						<li><a href="Blood.php">Blood NEED</a></li>
						<li><a href="medicines.php">Find Medicines</a></li>
					</ul>
				</div>
				<div>
					<h2>Are you registered?</h2>
					<p></p>

					<p><b>Fill Up Form</b></p>
					<form action="insert.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="address">address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
        <label for="city">city:</label>
        <input type="text" name="city" id="city">
    </p>
    <p>
        <label for="phone">phone:</label>
        <input type="text" name="phone" id="phone">
    </p>
    <p>
        <label for="email">email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="Gender">Gender:</label>
        <input type="text" name="Gender" id="Gender">
    </p>
		<p>
        <label for="bloodGrp">Blood Group:</label>
        <input type="text" name="bloodGrp" id="bloodGrp">
    </p>
    <input type="submit" value="Submit">
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
						<tr><td><label>Email</label></td><td>:</td><td>sharif.hossain02@northsouth.edu</td></tr>
						<tr><td><label>Address</label></td><td>:</td><td>Block B, Road: 10, Bashundhara, Dhaka</td></tr>
						<tr><td><label>Phone</label></td><td>:</td><td>017-73241632</td></tr>
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
