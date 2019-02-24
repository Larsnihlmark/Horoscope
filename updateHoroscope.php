<?php

session_start();
parse_str(file_get_contents("php://input"), $_PUT);

if(isset($_SERVER["REQUEST_METHOD"]) == "PUT"){
    
    if(isset($_SESSION["horoscope"]) == null){
        echo json_encode(false);
    }
    else if(isset($_PUT["personNr"]) == null){
        echo json_encode(false);
    }
    else{
        $_POST["personNr"] = $_PUT["personNr"];
        include 'allHoroscope.php';
        $falseCheck = $horoscope->printSign();
        
        if($falseCheck != "<p>Felaktigt personnummer!</p>"){
            $_SESSION["horoscope"] = $horoscope->printSign();
            echo ($_SESSION["horoscope"]);
            echo json_encode(true);
        }
        else{
            echo $falseCheck;
            session_destroy();
        }
    }
}
else {
    echo  json_encode(array("status" => "error", "not requested by PUT"));
}

?>