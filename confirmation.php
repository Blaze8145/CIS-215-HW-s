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
    $agro = 0;
    $stax = 0;
    $combo = 0;
    $midrange = 0;
    $politic = 0;
?>