<?php //enter.php
require_once 'db_connect.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>User Information</title>
	<link rel="stylesheet" href="styles/foundation.min.css">
  <link rel="stylesheet" href="styles/app.css">

  <script src="javascript/modernizr.foundation.js"></script>
</head>

<body>
	<div class="row">
		<div class="twelve columns">
			<h1>User Information</h1>
			<a href="index.php">View My Favorite Teams</a>
			<br>
			<form name="interests-enter" action="insert.php" method="get">

				<label>name</label>
				<input type="text" name="name">
				<br>
				<label>email</label>
				<input type="text" name="email">
				<br>
				<label>sport</label>
				<input type="text" name="sport">
				<br>
				<label>team</label>
				<input type="text" name="team">
				<br>
				<label>cable provider</label>
				<input type="text" name="cable_provider">
				<br>
				<button type="submit" class="button">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>