<?php
require "dataBase";

$registerOrLogin = true;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $registerOrLogin ? "Login" : "Register"; ?></title>

	<style>
		body {
			background: #2b2b2b;
			color: #f2f2f2;
			font-family: sans-serif;
		}
		label, button {
			display: block;
			margin-top: 14px;
		}
	</style>
</head>
<body>
	<form method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" required>

		<label for="lastname">Last Name</label>
		<input type="text" id="lastname" name="lastname" required>

		<button type="submit" name="submit">Submit</button>
	</form>

	<form method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" required>

		<label for="lastname">Last Name</label>
		<input type="text" id="lastname" name="lastname" required>

		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>
