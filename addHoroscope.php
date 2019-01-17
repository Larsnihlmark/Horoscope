<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "allHoroscope.php";
    $wrongNumberMessage = $horoscope->printSign();
    $falseCheck = $horoscope->printSign();

    if($_POST["personNr"] == null && $_SESSION["horoscope"] == null){
        echo "<p>Skriv in ett personnummer!</p>";
    }
    else if(isset($_SESSION["horoscope"]) == null){

        if($falseCheck != "<p>Felaktigt personnummer!</p>"){
            $_SESSION["horoscope"] = $horoscope->printSign();
            $true = true;
            echo $true;
        }
        else{
            echo $wrongNumberMessage;
        }
    }
}
?>