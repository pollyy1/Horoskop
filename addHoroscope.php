<?php

session_start();

if(isset($_SERVER['REQUEST_METHOD'])) {


    if($_SERVER['REQUEST_METHOD'] === 'POST') {

      if(isset($_POST["date"])) {
       $_SESSION["date"] = serialize($_POST["date"]);
       }  
       //$('#saveBtn').prop('disabled', true);
            $fullDate= strtotime(unserialize($_SESSION["date"]));
            echo $fullDate;
            if ($fullDate){
            $month=date('m',$fullDate);
            $day=date('d',$fullDate);
            
           if (!isset($_SESSION["horoscopes"])){
            include "calculate.php";
              $_SESSION["horoscopes"] = calcSign($month, $day);
               //$_SESSION["horoscopes"] = calcSign("", "");
              
                echo true;
           }}
           else {
               echo false;
            }
       
    }
 } 
  else {

    echo json_encode("No valid request");
}




?>

