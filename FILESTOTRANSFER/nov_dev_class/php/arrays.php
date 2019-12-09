<?php 
//index array
//associative array
//multi dimensional array

// // index array 
// $studentsName = array('shota','hotaka','tomonori','shodai');
// $array = array(1,1.0,'c',"hello world",true);

// // OTHER WAYS OF CREATING AN INDEX ARRAY
// // $array = ['','','','','','',];
// // $array[] = 'teacher handsome';
// // $array [] = 'shota';
// // $array[] = 'tomo';
// // echo $studentsName;

// // debugging arrays -> debugging means removing the bug/error\
// // arrays start counts at 0
// echo "<pre>";
// print_r($studentsName);
// echo "</pre>";


// echo "<br>";
// echo "<br>";
// // another debuging tool
// echo "<pre>";

// var_dump($array);
// echo "</pre>";

// // echo $studentsName[2];
// echo "<br>";
// echo "<br>";

// // WILL COUNT THE NUMBERS OF DATA INSIDE A ARRAY
// echo count($studentsName);



// $months = array('january','february','march','april','may','june','july','august','september','october','november','december');


// $arrayLength = count($months);

// for($x=0;$x<$arrayLength;$x++){
//     echo $months[$x];
//     echo "<br>";

// }

// $array = [];
$array = array('shota'=>'23','tomo'=>'27','hotaka'=>'21','shodai'=>'26');

$sensei = array('kurt'=>'23','john'=>'27','handsome'=>'21');

// echo "The age of that student is ".$array['shota'];

foreach($array as $name => $age){
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";

}

foreach($sensei as $name => $age){
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";

}

?>