<?php
        $password_hash = "";
        //run echo then paste up top then delete this
        echo password_hash("Winter_Orb",PASSWORD_DEFAULT);
        
        $verfied = password_verify($_POST["password-input"], $password_hash);
        
?>