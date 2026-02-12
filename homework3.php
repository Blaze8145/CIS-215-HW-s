<?php
    function loops(){
        // This for loop counts from 1 to $n and adds only factors of 2 into the array $evens
        $evens = array();
       $max =10;
       for($num = 1;$num <= $max;$num++){
            if($num%2 == 0){
                $evens[]=$num;
            }
       }
       $whileEvens = array();
       $whileMax =10;
       $count = 1;
       //This while loop counts from 1 to $count and adds only factors of 2 into the array $whileEvens
       while($count <= $count){
            if($num%2 == 0){
                $whileEvens[]=$num;
            }
            $count++;
       }
        // Factorial counts from 1 to 30 and prints out numbers that are divisible by 2 or 3
        for($factorial = 1;$factorial<=30;$factorial++){
            if($factorial%2==0){
                echo $factorial . " ";
            }elseif($factorial%3==0){
                echo $factorial . " ";
            }
        }
        //While loop function that count 1 to 30 and prints numbers divisable of 2 and 3
        $divisables = 1;
        while($divisables<=30){
            if($factorial%2==0){
                echo $factorial . " ";
            }elseif($factorial%3==0){
                echo $factorial . " ";
            }
            $divisables++;
        }
    }
?>