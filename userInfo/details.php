<?php

//details.php

require_once 'db_connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM userInfo WHERE id=" . $id;
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);

//echo $rows;
?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php $id ?></title>
</head>
<body>
	<?php echo "<h1>User Sport Interest " . $id . "</h1>" ?>
	<table class="table">
		<?php
		for($i=0; $i<$rows; $i++) {
			echo '<tr>';
			echo '<td>' . mysql_result ($result, $i, 'name') . '</td>';
			echo '<td>' . mysql_result ($result, $i, 'email') . '</td>';
			echo '<td>' . mysql_result ($result, $i, 'sport') . '</td>';
			echo '<td>' . mysql_result ($result, $i, 'team') . '</td>';
			echo '<td>' . mysql_result ($result, $i, 'cable_provider') . '</td>';
			echo '</tr>';
		}
		?>
	</table>
</body>
</html>