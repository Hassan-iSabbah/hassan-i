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
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="news.php">News</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<iframe width="1220" height="630" src="https://www.youtube.com/embed/j3pI91DB7J4?start=13"
			title="YouTube video player" frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			allowfullscreen></iframe>
		<section class="contact">
			<h2>Contact Us</h2>
			<p>Please fill out the form below to get in touch with us.</p>

			<form action="submit.php" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>

				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" required>

				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>

				<input type="submit" value="Submit">
			</form>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 The Party Architects. All rights reserved.</p>
	</footer>
</body>

</html>