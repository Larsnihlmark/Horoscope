<?php

session_start();
parse_str(file_get_contents("php://input"), $_PUT);

if(isset($_SERVER["REQUEST_METHOD"]) == "PUT"){

    if(isset($_SESSION["horoscope"]) == null){
        echo "<p>Det finns inget horoskop sparat!</p>";
    }
    else if(isset($_PUT["personNr"]) == null){
        echo "<p>Skriv in ett personnummer, radera den gamla och spara den nya!</p>";
    }
    else{
        $_POST["personNr"] = $_PUT["personNr"];
        include 'allHoroscope.php';
        $falseCheck = $horoscope->printSign();

        if($falseCheck != "<p>Felaktigt personnummer!</p>"){
            $_SESSION["horoscope"] = $horoscope->printSign();
            $true = true;
            echo $true;
        }
        else{
            echo $falseCheck;
            session_destroy();
        }
    }
}

?>