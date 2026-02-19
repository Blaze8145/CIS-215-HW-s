<?php
    if(!isset($_POST['submit-button'])){
        echo "ERR: Form NOT Found";
        exit();
    }
    $testFeilds=["MTG Win","MTG Hand","MTG Threat","MTG Deck","MTG Games","MTG Topdeck","MTG Table","MTG Card"];
    //Goes threw Every feild to make sure it is answered
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
    $result=[$_POST["MTG Win"],$_POST["MTG Hand"],$_POST["MTG Threat"],$_POST["MTG Deck"],$_POST["MTG Games"],$_POST["MTG Topdeck"],$_POST["MTG Table"],$_POST["MTG Card"]];
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
        if($firstPlace > 1){
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