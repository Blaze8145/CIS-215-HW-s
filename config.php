<?php
/*
Author: Julian Schrauger
Email: jschraug@genesee.edu
*/
include("dbconfig.php");
$db = connectDB();
//Makes Movies Table to 5 Colemns
//Runtime is in minutes
$db->query(
"CREATE TABLE IF NOT EXISTS movies(id INT AUTO_INCREMENT PRIMARY KEY,
 movieName VARCHAR(50) NOT NULL,
 rating VARCHAR(10),
 runtime INT,
 director VARCHAR(50),
 dateRelease DATE)");
//Sets up Varible to add values into table.
$movie = $db->prepare("INSERT INTO movies(movieName,rating,runtime,director,dateRelease) VALUES(?,?,?,?,?);");

//A Silent Voice
//Personal rating 11/10
$movie->execute(array("A Silent Voice","PG-13",130,"Naoko Yamada","2016-09-17"));

//Monty Python and the Holy Grail
//Personal Rating 8/10
$movie->execute(array("Monty Python and the Holy Grail","PG",91,"Terry Gilliam","1975-04-03"));

//Back to the Future
//Personal Rating 7/10
$movie->execute(array("Back to the Future","PG",116,"Robert Zemeckis","1985-07-03"));

//Iron Lung
//Personal Rating N/A Plan to see it
$movie->execute(array("Iron Lung","R",110,"Mark Fischbach","2024-01-01"));

//SpaceBalls
//Personal Rating 9/10
$movie->execute(array("SpaceBalls","R",96,"Mel Brooks","1987-06-24"));

//Gets Data from Movies
$selectData = $db->prepare("SELECT movieName FROM movies WHERE runtime < 120;");
$selectData->execute();
$result = $selectData->fetchAll();

//Fetch data and print
foreach($result as $row){
    echo "<div>" .$row['movieName']. "</div>";
}

//Complex Select
$complex=$db->prepare("SELECT * FROM movies WHERE movieName NOT LIKE '% and %' AND movieName NOT LIKE '% the %' AND movieName NOT LIKE '% a %' AND movieName NOT LIKE '% an %' ");
$complex->execute();
$complexResult = $complex->fetchAll();
foreach($complexResult as $complexRow){
    echo "<div>" .$complexRow['movieName']. "</div>";
}

//Cougar Awards
//Adds row Cougar_Award
$award=$db->prepare("ALTER TABLE movies ADD IF NOT EXISTS Cougar_Award INT");
$award->execute();
//Sets every movie Cougar_Award to 0
$runners=$db->prepare("UPDATE movies SET Cougar_Award = 0");
$runners->execute();
//Sets 1 movie in Cougar_Award to 1
$awardWinner=$db->prepare("UPDATE movies SET Cougar_Award =1 WHERE movieName = ?");
$awardWinner->execute(array("A Silent Voice"));
//Displays table in order of Cougar_Award
$winner=$db->prepare("SELECT * FROM movies ORDER BY Cougar_Award DESC");
$winner->execute();
$winnerResult = $winner->fetchAll();
foreach($winnerResult as $winnerRow){
    echo "<div>" .$winnerRow['movieName'].">>Award:". $winnerRow['Cougar_Award']. "</div>";
}

//Delete from table
$delete=$db->prepare("DELETE FROM movies WHERE runtime < 100");
$delete->execute();
$remainingData = $db->prepare("SELECT movieName FROM movies;");
$remainingData->execute();
$finalCut = $remainingData->fetchAll();
foreach($finalCut as $finalRow){
    echo "<div>" .$finalRow['movieName']. "</div>";
}
?>