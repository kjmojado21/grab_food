<?php 

$name = "kurt";

switch ($name){
    case "shota":
        echo "you are shota";
    break;
    case "shodai":
        echo "you are shodai";
    break;
    case "taka":
        echo "you are taka";
    break;
    case "tomo":
        echo "you are tomo";
    break;
    default:
        echo "you are the handsome Sensei";

}



if(isset($_POST['calculate'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $add = $_POST['radioname'];


    if($result == 'add'){
       echo  $num1 + $num2;
    }elseif($result == 'subtraction'){
        
        
    }
}










?>