<?php
session_start();
parse_str(file_get_contents("php://input"), $_PUT);


if ($_SERVER['REQUEST_METHOD'] === 'PUT'){ 
$month = date('m',strtotime($_PUT['birthDate']));
$day = date('d',strtotime($_PUT['birthDate']));



include "calculate.php";
 
  
    if(isset($_SESSION['horoscopes'])){  
        $_SESSION['horoscopes'] = calcSign($month, $day);
    echo true;
}
else{
    echo false;
}
}



?>