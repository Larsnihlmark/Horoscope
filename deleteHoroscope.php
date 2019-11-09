<?php

session_start();

if(isset($_SERVER["REQUEST_METHOD"]) == "DELETE"){

    if(isset($_SESSION["horoscope"]) == null){    
        echo json_encode(false);
    }
    else{
        echo json_encode(true);
        session_destroy();
    }
}
else {
    echo  json_encode(array("status" => "error", "not requested by DELETE"));
}

?>