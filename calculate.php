<?php function calcSign($month, $day){
    if ($month== 1 && $day <=19) {$sign= "Capricorn";}
    if ($month== 1 && $day >=20) {$sign= "Aquarius";}
    if ($month== 2 && $day <=18) {$sign= "Aquarius";}
    if ($month== 2 && $day >=19) {$sign= "Pisces";}
    if ($month== 3 && $day <=20) {$sign= "Pisces";}
    if ($month== 3 && $day >=21) {$sign= "Aries";}
    if ($month== 4 && $day <=20) {$sign= "Aries";}
    if ($month== 4 && $day >=21) {$sign= "Taurus";}
    if ($month== 5 && $day <=20) {$sign= "Taurus";}
    if ($month== 5 && $day >=21) {$sign= "Gemini";}
    if ($month== 6 && $day <=20) {$sign= "Gemini";}
    if ($month== 6 && $day >=21) {$sign= "Cancer";}
    if ($month== 7 && $day <=21) {$sign= "Cancer";}
    if ($month== 7 && $day >=22) {$sign= "Leo";}
    if ($month== 8 && $day <=21) {$sign= "Leo";}
    if ($month== 8 && $day >=22) {$sign= "Virgo";}
    if ($month== 9 && $day <=21) {$sign= "Virgo";}
    if ($month== 9 && $day >=22) {$sign= "Libra";}
    if ($month== 10 && $day <=21) {$sign= "Libra";}
    if ($month== 10 && $day >=22) {$sign= "Scorpio";}
    if ($month== 11 && $day <=21) {$sign= "Scorpio";}
    if ($month== 11 && $day >=22) {$sign= "Sagittarius";}
    if ($month== 12 && $day <=20) {$sign= "Sagittarius";}
    if ($month== 12 && $day >=21) {$sign= "Capricorn";}
    if(($month== null || $day==null) ) { $sign="None";}

    return $sign;
  
}
?>