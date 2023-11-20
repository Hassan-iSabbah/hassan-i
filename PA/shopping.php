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
		<section class="products">
			<h2>Shop</h2>
			<ul class="product-list">
				<li>
					<img src="images/balloons.jpg" alt="Balloons">
					<h3>Balloons</h3>
					<p>$5.99</p>
					<button>Add to Cart</button>
				</li>
				<li>
					<img src="images/chocolates.jpg" alt="Chocolates">
					<h3>Personalized Chocolates</h3>
					<p>$9.99</p>
					<button>Add to Cart</button>
				</li>
				<!-- Add more product items here -->
			</ul>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 The Party Architects. All rights reserved.</p>
	</footer>
</body>
</html>
