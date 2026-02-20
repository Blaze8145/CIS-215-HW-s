<?php
    /*
    Author Julian Schrauger
    Email: jschraug@genesee.edu
    Function winner takes the results of the quiz and determines the kind of player the applicant is and deals with a tie.
    */
    if(!isset($_POST['submit-button'])){
        echo "ERR: Form NOT Found";
        exit();
    }
    $testFeilds=["MTG_Win","MTG_Hand","MTG_Threat","MTG_Deck","MTG_Games","MTG_Topdeck","MTG_Table","MTG_Card"];
    //Goes threw Every question to make sure it is answered
    foreach($testFeilds as $MTG){
        if(!isset($_POST[$MTG])){
            echo "ERR: All Question must be answered";
            exit();
        }
    }
    //Holds counters for end result
    $agro = 0;
    $stax = 0;
    $combo = 0;
    $midrange = 0;
    $politic = 0;
    $result=[$_POST["MTG_Win"],$_POST["MTG_Hand"],$_POST["MTG_Threat"],$_POST["MTG_Deck"],$_POST["MTG_Games"],$_POST["MTG_Topdeck"],$_POST["MTG_Table"],$_POST["MTG_Card"]];
    foreach($result as $point){
        if($point == "agro"){
            $agro++;
        }elseif($point == "stax"){
            $stax++;
        }elseif($point =="combo"){
            $combo++;
        }elseif($point == "midrange"){
            $midrange++;
        }elseif($point == "politic"){
            $politic++;
        }else{
            echo "ERR: Invalid Answer";
            exit();
        }
    }
    //This Function makes is so it will go thruw every player and see which one is the highest.
    //Tie code sees if multiple varibles equal the firstPlace
    function winner($agro, $stax, $combo, $midrange, $politic){
        $firstPlace = $agro;
        //Sees If any of the other varibles is higher than the firstPlace
        if($stax > $firstPlace){
            $firstPlace = $stax;
        }
        if($combo > $firstPlace){
            $firstPlace = $combo;
        }
        if($midrange > $firstPlace){
            $firstPlace = $midrange;
        }
        if($politic > $firstPlace){
            $firstPlace = $politic;
        }
        //If a tie
        $tie = 0;
        if($agro == $firstPlace) $tie++;
        if($stax == $firstPlace) $tie++;
        if($combo == $firstPlace) $tie++;
        if($midrange == $firstPlace) $tie++;
        if($politic == $firstPlace) $tie++;
        //If result is a tie returns this
        if($tie > 1){
            echo "<p>Your a Hybrid Player!</p>";
            return;
        }
        //If no tie present
        if($agro == $firstPlace){
            echo"<p>You are a Agro Player!</p>";
        }elseif($stax == $firstPlace){
            echo"<p>You are a Stax Player!</p>";
        }elseif($combo == $firstPlace){
            echo"<p>You are a Combo Player!</p>";
        }elseif($midrange == $firstPlace){
            echo"<p>You are a Midrange Player!</p>";
        }elseif($politic == $firstPlace){
            echo"<p>You are a Politic Player!</p>";
        }
    }
    winner($agro, $stax, $combo, $midrange, $politic);
?>