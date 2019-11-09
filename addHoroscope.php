<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "allHoroscope.php";
    $wrongNumberMessage = $horoscope->printSign();
    $falseCheck = $horoscope->printSign();

    if($_POST["personNr"] == null){
        echo json_encode(false);
    }
    else if(isset($_SESSION["horoscope"]) == null){

        if($falseCheck != "<p>Felaktigt personnummer!</p>"){
            $_SESSION["horoscope"] = $horoscope->printSign();
            echo ($_SESSION["horoscope"]);
            echo json_encode(true);
        }
        else{
            echo $wrongNumberMessage;
        }
    }
}
else{
    echo  json_encode(array("status" => "error", "not requested by POST"));
}
?>