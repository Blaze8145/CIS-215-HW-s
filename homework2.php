<?php
echo "<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>HW2</title>";
echo "</head>";
echo "<body>";
echo "<h1>Hello World!</h1>";
$form = "H"; //represents Hour (00-23)
$time = date($form);
if(6 <= $time && $time < 12){
    echo "Morning";
}elseif($time < 18){
    echo "Afternoon";
}else{
    echo "Night";
}
echo "</body>";
echo "</html";
?>
