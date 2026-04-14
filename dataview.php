<?php
    include("dbconfig.php");
    $db = connectDB();

    //Age
    echo "<h2>Age Distribution</h2>";
    $getDataAge = $db->prepare("SELECT age, COUNT(*) AS ageCount FROM survey GROUP BY age");
    $getDataAge->execute();
    $ageAve = $getDataAge->fetchAll();

    //Fetch data and print
    foreach($ageAve as $ageRow){
        echo "<div>" .$ageRow['age']." : ".$ageRow['ageCount']. "</div>";
    }

    //Gender
    echo "<h2>Gender Distribution</h2>";
    $getDataGender = $db->prepare("SELECT gender, COUNT(*) AS genderCount FROM survey GROUP BY gender ASC");
    $getDataGender->execute();
    $genderResult = $getDataGender->fetchAll();

    //Fetch data and print
    foreach($genderResult as $genderRow){
        echo "<div>" .$genderRow['gender']." : " .$genderRow['genderCount']. "</div>";
    }
    
    //Mood
    echo "<h2>Mood Average</h2>";
    $getDataMood = $db->prepare("SELECT AVG(healthCheck) AS aveMood FROM survey");
    $getDataMood->execute();
    $moodResult = $getDataMood->fetchAll();

    //Fetch data and print
    foreach($moodResult as $moodRow){
        echo "<div>" .$moodRow['aveMood']. "</div>";
    }

    //Season
    echo "<h2>Seasons Randomly</h2>";
    $getDataSeason = $db->prepare("SELECT season FROM survey ORDER BY RAND() LIMIT 3");
    $getDataSeason->execute();
    $seasonResult = $getDataSeason->fetchAll();

    //Fetch data and print
    foreach($seasonResult as $seasonRow){
        echo "<div>" .$seasonRow['season']."</div>";
    }
    echo "<a href='project1starter(7) (1).php'>Back to Survey Form</a>";
?>