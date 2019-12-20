<?php
   session_start();
   
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
   
       if(isset($_SESSION['horoscopes'])){ 
        unset($_SESSION['horoscopes']);
        echo true;
    }
    else{
        echo false;
    }
   }
   ?>   