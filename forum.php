<?php
include 'database_connect_forum.php';
ini_set('display_errors', 1); error_reporting(-1);
if (isset($_POST['submit']))
{
	
	$game_type = $_POST['game_type'];
	$number_of_players = $_POST['number_of_players'];

}

$sql = "INSERT INTO forum (curenttime,game_type,number_of_players) VALUES (NOW(),'$game_type','$number_of_players')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>