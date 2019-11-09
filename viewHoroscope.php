<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "GET"){

    if($_SESSION == !null){
        echo ($_SESSION["horoscope"]);
        echo json_encode(true);
    }
    else{
        echo json_encode(false);
    }
}
else {
    echo  json_encode(array("status" => "error", "not requested by GET"));
}
?>