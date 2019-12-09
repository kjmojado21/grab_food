<?php 

include 'other_functions.php';

$firstNumber; //camel case

$FirstName; // pascal Case
        //snakeCase
function display_message(){
    // code goes here

    echo "Hello world";

}


function addition($num1,$num2){
    return $num1+$num2;
    
    

}



function example($num1,$num2){
    return $num1/$num2;
}

// echo addition(10,10,3);


$firstNumber  = 5;
$SecondNumber = 10;
$first = 5;
$second= 10;


echo addition($firstNumber,$SecondNumber);
echo "<br>";

echo example($first,$second);


// function write_msg(){
//     $message = 'Hello i am a message';
//     $message2 = "second message";

//     return $message2.$message;
// }

// echo write_msg();









echo "<br>";

echo display();

echo "<br>";
echo $var;

echo "<br>";

$holder = number();

echo $holder;


?>