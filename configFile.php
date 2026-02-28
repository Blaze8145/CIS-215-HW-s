<?php
$db = connectDB();
/*$db->query("CREATE TABLE example(id INT AUTO_INCREMENT PRIMARY KEY, anotherColemn VARCHAR(50) NOT NULL, anotherInt INT);
INSERT INTO example(anotherColemn,anotherInt) VALUES('Hey',2);
");*/
$prepared_stat = $db->prepare("INSERT INTO example(anotherColemn,anotherInt) VALUES(?,?);");
$prepared_stat->execute(array($col1_input,$col2_input));
$exampleInput = $_POST["example"];
$prepared_stat->execute(array($exampleInput));
?>