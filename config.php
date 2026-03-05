<?php
include("dbconfig.php");
$db = connectDB();
//Makes Movies Table to 5 Colemns
//Runtime is in minutes
$db->query(
"CREATE TABLE movies(id INT AUTO_INCREMENT PRIMARY KEY,
 movieName VARCHAR(50) NOT NULL,
 rating VARCHAR(10),
 runtime INT,
 director VARCHAR(50),
 dateRelease DATE)");
//Sets up Varible to add values into table.
$movie = $db->prepare("INSERT INTO movies(movieName,rating,runtime,director,dateRelease) VALUES(?,?,?,?,?);");
//bind_param makes it so the order of inputs is String String Int String Sting
$movie->bind_param('ssiss',$title,$rating,$runtime,$director,$dateOfRelease);

//A Silent Voice
//Personal rating 11/10
$title="A Silent Voice";
$rating="PG-13";
$runtime="130";
$director="Naoko Yamada";
$dateOfRelease="2016-09-17";
movie->execute();

//Monty Python and the Holy Grail
//Personal Rating 8/10
$title="Monty Python and the Holy Grail";
$rating="PG";
$runtime="91";
$director="Terry Gilliam";
$dateOfRelease="1975-04-03";
movie->execute();

//Back to the Future
//Personal Rating 7/10
$title="Back to the Future";
$rating="PG";
$runtime="116";
$director="Robert Zemeckis";
$dateOfRelease="1985-07-03";
movie->execute();

//Iron Lung
//Personal Rating N/A Plan to see it
$title="Iron Lung";
$rating="R";
$runtime="110";
$director="Mark Fischbach";
$dateOfRelease="2024-01-01";
movie->execute();

//SpaceBalls
//Personal Rating 9/10
$title="SpaceBalls";
$rating="R";
$runtime="96";
$director="Mel Brooks";
$dateOfRelease="1987-06-24";
movie->execute();

//Gets Data from Movies
$select_data = $db->prepare("SELECT movieName FROM movies WHERE runtime < 120;");
$select_data->execute();

//Fetch data
$fetch1 = $select_data->fetch();
$fetchall = $select_data->fetchall();
var_dump($fetch1,$fetchall);
?>