<?php
    /*
    Author:Julian Schrauger jschraug@genesee.edu
    The function loops displays both for loop and while loops of two count up loops
    The function letterGrade receives a number and turns it into a letter grade based on a ifelse chain
    The function musicalChairs makes an array of names then eliminates the last in list after being shuffled until only one remains.
    The function FizzBuzz replaces variables of 3 with Fizz variables of 5 with Buzz and of both FizzBuzz
    */
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
       while($count <= $whileMax){
            if($count%2 == 0){
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
            if($divisables%2==0){
                echo $divisables . " ";
            }elseif($divisables%3==0){
                echo $divisables . " ";
            }
            $divisables++;
        }
    }
    // For both loops I found that for loops were a better choice for me because of less lines used.
    loops();
    /*This Function Takes names and shuffles thier order then removes that last in list until 1 remains then returns that name.
    */
    function musicalChairs(){
        $name = array("Ann","Ben","Charlie","Diane");
        while (count($name) >1) {
            shuffle($name);
            $noChair = array_pop($name);
            //array_pop eliminates last person in array
            echo $eliminated . " Out";
        }
        echo $name[0] . " Wins";
    }
    /*This Function recieves a number to turn into a letter grade
    */
    $grade =0;
    function letterGrade($grade){
        if($grade >= 90){
            return "A";
        }elseif($grade >= 80){
            return "B";
        }elseif($grade >= 70){
            return "C";
        }elseif($grade >= 60){
            return "D";
        }else{
            return "F";
        }
    }
    echo letterGrade(80);
    $stopNum=0;
    function FizzBuzz($stopNum){
        for($start =1;$start<=$stopNum;$start++){
            if($start%3==0&&$start%5==0){
                echo "FizzBuzz" . " ";
            /* To add Mazz add this here
            if($start % 7 == 0){
                echo "Mozz" . " "
            }elseif(){}
            */
            }elseif($start%3==0){
                echo "Fizz" . " ";
            }elseif($start%5==0){
                echo "Buzz" . " "; 
                // To change to Bozz change Buzz here to Bozz               
            }else{
                echo $start . " ";
            }
            
        }
    }
    FizzBuzz(15);
?>