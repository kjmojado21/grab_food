<?php 
// initialization 
 //variable initialized

// while($x<=5){ // <------condition
//     // code goes here (the repeating codes)
//     echo "this is a loop: ".$x;
//     echo "<br>";

//     $x++;
// }


// do{
//     echo "the value of x is:  ".$x;
//     echo "<br>";
//     $x++;
// }
// // while($x<=5);

// for($y = 1;$y <=5;$y++){
//     for($x = 1; $x <=$y;$x++){
//         echo "*";

//     }echo "<br>";
   
// }





// // initialization : a variable that you will use inside the loop
// $x=1;

// while($x<=5){ // condition: if the condition returns false, the loop terminates
// // code goes here
// echo $x;

// $x++; // incrementor
// }



// do{
//     echo $x;
//     echo "<br>";
//     $x++;

// }while($x<=5);

echo "<form method = post>";
        echo "<input type = 'number' name = 'user_input'>";
        echo "<button type = 'submit' name = 'submit'>Submit</button>";

echo "</form>";


if(isset($_POST['submit'])){

    $userInput = $_POST['user_input'];
    
for($x=1;$x<=$userInput;$x++){
    echo $x;

}
}
