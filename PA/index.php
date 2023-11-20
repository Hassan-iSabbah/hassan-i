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
		<section class="hero">
			<h2>
				<?php echo $userFirstName . ' '; ?>Transform Your Party Into Something Spectacular
			</h2>
			<p>Shop for balloons, personalized chocolates, costumes, gift wrap, greeting cards, 21st keys, party toys,
				pinatas, tablecloths, cups, plates, birthday badges and more at The Party Architects. We have everything
				you need to make your party unforgettable!</p>
			<a href="shopping.php" class="btn">Shop Now</a>
		</section>

		<section class="featured" style="position:relative">
			<h2>Featured Products</h2>
			<div class="products">
				<div class="product" style="position:absolute; left: 600px;">
					<img src="images/balloons.jpg" alt="Balloons">
					<h3>Balloons</h3>
					<p>$5.99</p>
					<a href="shopping.php" class="btn">Add to Cart</a>
				</div>
				<div class="product">
					<img src="images/chocolates.jpg" alt="Chocolates">
					<h3>Personalized Chocolates</h3>
					<p>$15.99</p>
					<a href="shopping.php" class="btn">Add to Cart</a>
				</div>
				<div class="product">
					<img src="images/costumes.jpg" alt="Costumes">
					<h3>Costumes</h3>
					<p>$29.99</p>
					<a href="shopping.php" class="btn">Add to Cart</a>
				</div>
			</div>
		</section>
		<section id='user'>
			<h1>Welcome,
				<?php echo $userFirstName . ' ' . $userLastName; ?>!
			</h1>
			<p>Email:
				<?php echo $userEmail; ?>
			</p>
			<p>Telephone:
				<?php echo $userTelephone; ?>
			</p>
			<p>Address:
				<?php echo $userAddress; ?>
			</p>
			<!-- Display other user-related information as needed -->

			<!-- Add more content or features for the user on this page -->

			<p><a href="logout.php">Logout</a></p>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 The Party Architects. All rights reserved.</p>
	</footer>
</body>


</html>