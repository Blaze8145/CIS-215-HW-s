<?php
include("dbconfig.php");
$db = connectDB();
//Makes Movies Table to 5 Colemns
$db->query(
"CREATE TABLE movies(id INT AUTO_INCREMENT PRIMARY KEY,
 movieName VARCHAR(50) NOT NULL,
 rating VARCHAR(10),
 runtime INT,
 director VARCHAR(50),
 dateRelease DATE)");
//Sets up Varible to add values into table.
$movie = $db->prepare("INSERT INTO movies(movieName,rating,runtime,director,dateRelease) VALUES(?,?,?,?,?);");

//Gets Data from Movies
$select_data = $db->prepare("SELECT movieName FROM movies WHERE runtime > 120;");
$select_data->execute();

$fetch1 = $select_data->fetch();
$fetchall = $select_data->fetchall();
var_dump($fetch1,$fetchall);
?>