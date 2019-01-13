<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "allHoroscope.php";
    $wrongNumberMessage = $horoscope->pringSign();

    if($_POST["personNr"] == null && $_SESSION["horoscope"] == null){
        echo "<p> Var vänligen skriv in ett personnummer!</p>";
    }
    else if($_SESSION["horoscope"] == null){

        if($falseCheck != "<p>Felaktigt personnummer!</p>"){
            $_SESSION["horoscope"] = $horoscope->printsign();
            $true = true;
            echo $true;
        }
        else{
            echo $wrongNumberMessage;
        }
    }
}
?>