<?php

//index.php

require_once 'db_connect.php';

$query = "SELECT * FROM interests";
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);

//echo $rows;
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>User Interests</title>
	<link rel="stylesheet" href="styles/foundation.min.css">
  <link rel="stylesheet" href="styles/app.css">

  <script src="javascript/modernizr.foundation.js"></script>
</head>
<body>

	<div class="row">
		<div class="twelve columns">
			<h1>User Sports Interests</h1>
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">
			<a href="index.php">HOME</a>
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">
			<p>To begin receiving updates about when your favorite team is playing:</p>
			<a class="button" href="enter.php">Get Started Now!</a><br /><br />
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<table class="table">
				<?php
				for($i=0; $i<$rows; $i++) {
					echo '<tr>';
					echo '<td>' . mysql_result($result, $i, 'sport') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'team') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'cable_provider') . '</td>';
					echo '</tr>';
				}
				?>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="twelve columns" id="footer">
			<div class="panel">
				<p>Lisa M. Watkins 2012.</p>
			</div>
		</div>
	</div>

<script src="javascript/jquery.js"></script>
  <script src="javascript/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascript/app.js"></script>

</body>
</html>