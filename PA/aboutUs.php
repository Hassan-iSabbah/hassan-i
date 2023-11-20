<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
	// Redirect to the login page if the user is not logged in
	header("Location: login.html");
	exit();
}

// Retrieve user information from session variables
$userEmail = $_SESSION['user_email'];
$userFirstName = $_SESSION['user_first_name'];
$userLastName = $_SESSION['user_last_name'];
$userTelephone = $_SESSION['user_telephone'];
$userAddress = $_SESSION['user_address'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Party Architects</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<h1>Welcome
			<?php echo $userLastName . ' '; ?> to The Party Architects
		</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="shopping.php">Shop</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="news.php">News</a></li>
			</ul>
		</nav>
	</header>

  <main>
      <div class="aboutUs">
        <h2>About Us</h2>
        <p>The Party Architects is your one-stop-shop for all things party-related! From balloons to personalized chocolates, costumes to gift wrap, greeting cards to 21st keys, party toys to pinatas, tablecloths to cups and plates, and even birthday badges - we've got it all!</p>
        <p>Our store is located in Maynard Mall, Wynberg, South Africa. Come visit us and explore our extensive selection of party supplies!</p>
        <p>We pride ourselves on providing top-quality products and excellent customer service. Our friendly and knowledgeable staff is always ready to help you find the perfect items for your celebration.</p>
        <ul>
          <li><strong>Address:</strong> Shop G46, Maynard Mall, corner of Main Road and Wetton Road, Wynberg, Cape Town, 7800, South Africa</li>
          <li><strong>Phone:</strong> +27 21 761 6258</li>
          <li><strong>Email:</strong> info@thepartyarchitects.co.za</li>
        </ul>
      </div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.588831332806!2d18.468397415213797!3d-34.00309348061932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc42e35c0b9c0d%3A0x44739cf2608a9c31!2sMaynard%20Mall!5e0!3m2!1sen!2sza!4v1684001011635!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>

	<footer>
		<p>&copy; 2023 The Party Architects. All rights reserved.</p>
	</footer>
</body>
</html>
