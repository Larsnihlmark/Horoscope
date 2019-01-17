<?php

session_start();

if(isset($_SERVER["REQUEST_METHOD"]) == "DELETE"){

    if(isset($_SESSION["horoscope"]) == null){
        echo "<p>Det finns inget horoskop sparat!</p>";
    }
    else{
        echo "<p>Horoskopet raderat!</p>";
        session_destroy();
    }
}

?>