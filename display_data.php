<?php
include 'database_connect_forum.php';
ini_set('display_errors', 1); error_reporting(-1);
$sql = "SELECT * FROM forum ORDER BY curenttime DESC";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

echo "<table class = 'forum_table'>";
if($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td id = 'col1'>".$row['curenttime']."</td><td id = 'col2'>".$row['game_type']."</td><td id = 'col3'>".$row['number_of_players']."</td></tr>";
		
	}
}
echo "</table>";
$conn->close();
?>