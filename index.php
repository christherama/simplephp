<?php
require('config/app.config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css">

	<!-- App CSS -->
	<link rel="stylesheet" type="text/css" href="assets/app.css">

	<title>Simple PHP Framework for Static Content</title>
</head>
<body>
	<header>
		<?php include('fragments/header.php') ?>
	</header>
	<div class="nav-container">
		<?php include('fragments/nav.php') ?>
	</div>
	<main>
		<?php include('fragments/main.php') ?>
	</main>
	<footer>
		<?php include('fragments/footer.php') ?>
	</footer>

<!-- jQuery JS -->
<script type="text/javascript" src="assets/vendor/jquery/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.js"></script>

<!-- App JS -->
<script type="text/javascript" src="assets/app.js"></script>
</body>
</html>