<?php
$db = connectDB();
$db->query("CREATE TABLE example(id INT AUTO_INCREMENT PRIMARY KEY, anotherColemn VARCHAR(50) NOT NULL, anotherInt INT);
INSERT INTO example(anotherColemn,anotherInt) VALUES('Hey',2);
");
?>