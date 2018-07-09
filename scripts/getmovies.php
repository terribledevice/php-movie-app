<?php

require_once '/Users/user/github.com/terribledevice/php-movies/resources/login.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}

$sql    = "SELECT `year`, `title`, `genre` FROM `movie_collection`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["title"]."</td><td>".$row["year"]."</td><td>".$row["genre"]."</td></tr>";
	}
} else {
	echo "0 results";
}
$conn->close();