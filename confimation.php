<?php
        /*
        Author: Julian Schrauger
        Email: jschraug@genesee.edu
        */
        include("dbconfig.php");
        $db = connectDB();
        $db->query(
        "CREATE TABLE IF NOT EXISTS survey(id INT AUTO_INCREMENT PRIMARY KEY,
        emailName VARCHAR(50) NOT NULL UNIQUE,
        age VARCHAR(10),
        gender VARCHAR(10),
        healthCheck INT,
        season VARCHAR(12));");

        $password_hash = "\$2y\$10\$oDNj/jsMX3/g8bvgDBdE3.A.NAcHa5c46LaKskVG2R7os0A0M2Lau";
        $verfied = password_verify($_POST["pw-name"], $password_hash);
        
        if($verfied==true&&isset($_POST['submit-button'])){
                main();
        }else{
                echo "Incorrect Password";
        }

        
        //Sanitize every special character that passes threw it
        function sanitize($data){
                return htmlentities(trim($data));
        }
        function main(){

                global $db;

                if(isset($_POST['email-name'])&&filter_var($_POST['email-name'],FILTER_VALIDATE_EMAIL)){
                        //Didn't sanitize because of the @symbol and special chariters in first half of email
                        $email = sanitize($_POST['email-name']);
                        $emailSQL = $_POST['email-name'];
                }else{
                        $emailSQL = NULL;
                }
                //Makes sure it has a input and is a value of valid_age
                $valid_age=["0-12","13-17","18-22","23-27","28-32","33-37","38-42","43-47","48-52","53-57","58-62","63-67","68+"];
                if(isset($_POST['age'])&&in_array($_POST['age'],$valid_age)){
                        $age = sanitize($_POST['age']);
                        $ageSQL = $_POST['age'];
                }else{
                        $ageSQL = NULL;
                }
                //Makes sure it has a input and is a value of valid_gender
                $valid_genders=["m","f","nb","gf","a","o"];
                if(isset($_POST['gender'])&&in_array($_POST['gender'],$valid_genders)){
                        $gender = sanitize($_POST['gender']);
                        $genderSQL = $_POST['gender'];
                }else{
                        $genderSQL = NULL;
                }
                //Makes sure it has a input and is a value between 1 and 10 and is a number
                if(isset($_POST['healthcare'])&&is_numeric($_POST['healthcare'])&& 10 >= $_POST['healthcare'] && $_POST['healthcare'] >= 1){
                        $mood = sanitize($_POST['healthcare']);
                        $moodSQL = $_POST['healthcare'];
                }else{
                        $moodSQL = NULL;
                }
                //Makes sure it has a input and is a value of valid_season
                $valid_season = ["SPRING","Spring","spring","SUMMER","Summer","summer","FALL","Fall","fall","WINTER","Winter","winter"];
                if(isset($_POST['seasons'])&&in_array($_POST['seasons'],$valid_season)){
                        $season = sanitize($_POST['seasons']);
                        $seasonSQL = $_POST['seasons'];
                }else{
                        $seasonSQL = NULL;
                }
                
                $surveyInsert = $db->prepare("INSERT INTO survey(emailName,age,gender,healthCheck,season) VALUES(?,?,?,?,?);");
                $surveyInsert->execute(array($emailSQL,$ageSQL,$genderSQL,$moodSQL,$seasonSQL));

                echo "<a href='dataview.php'>View Survey Data</a>";


        }
                
?>