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
		<section class="news">
			<h2>Latest News</h2>
			<article>
				<header>
					<h3>New Party Themes Available</h3>
					<p class="date">May 1, 2023</p>
				</header>
				<p>We are excited to announce that we have added new party themes to our collection, including unicorn, dinosaur, and space themes. Check them out on our <a href="shopping.html">shop</a> page!</p>
			</article>
			<article>
				<header>
					<h3>Shop Our Sale Items</h3>
					<p class="date">April 15, 2023</p>
				</header>
				<p>Don't miss out on our sale items! We have discounted prices on select party toys, balloons, and tableware. Visit our <a href="shopping.html">shop</a> page to see what's on sale.</p>
			</article>
			<article>
				<header>
					<h3>Customizable Chocolates</h3>
					<p class="date">March 28, 2023</p>
				</header>
				<p>Introducing our new customizable chocolates! You can now add a personalized message or photo to our chocolate bars and gift boxes. Order now on our <a href="shopping.html">shop</a> page.</p>
			</article>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 The Party Architects. All rights reserved.</p>
	</footer>
</body>
</html>
