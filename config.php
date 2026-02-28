<?php
require_once("dbconfig.php");
$db = connectDB();
/*$db->query("CREATE TABLE example(id INT AUTO_INCREMENT PRIMARY KEY, anotherColemn VARCHAR(50) NOT NULL, anotherInt INT);
INSERT INTO example(anotherColemn,anotherInt) VALUES('Hey',2);
");*/
$city = $_POST["city"];
$price = $_POST["price"];
$days = $_POST["daysListed"];
$prepared_stat = $db->prepare("INSERT INTO houses(houseCity,price,daysListed) VALUES(?,?,?);");
$prepared_stat->execute(array($city,$price,$days));
$exampleInput = $_POST["example"];
$prepared_stat->execute(array($exampleInput));
?>