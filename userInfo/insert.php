<?php //insert.php
require_once 'db_connect.php';

// get url variables
$name = $_GET['name'];
$email = $_GET['email'];
$sport = $_GET['sport'];
$team = $_GET['team'];
$cable_provider = $_GET['cable_provider'];

if (!$name or !$email or !$sport or !$team or !$cable_provider) {
	// not all information is present redirect to form
	// we will talk about this in class you can do one or the other here if you have a better solution than do it
	echo "Did not get all the information requested.";
	// header( 'Location: enter.php');
}
else {

	// insert into database
	$query = 'INSERT INTO interests (name, email, sport, team, cable_provider) values ("' . $name . '", "' . $email . '", "' . $sport . '", "' . $team . '", "' . $cable_provider . '")';

	// echo $query; // for testing your query

	// run query
	$result = mysql_query($query);

	// check for errors
	if (!$result) {
		die ("Database access failed: " . mysql_error());	
	}
	else {
		// redirect to list
		header( 'Location: index.php');
	}
}
?>