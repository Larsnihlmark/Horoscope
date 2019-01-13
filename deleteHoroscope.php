<?php

session_start();
if($_SESSION["REQUEST_METHOD"] == "DELETE"){

    if($_SESSION["horoscope"] == null){
        echo "<p>Det finns inget horoskop sparat!</p>";
    }
    else{
        echo "<p>Horoskopet raderat!</p>";
        session_destroy();
    }
}

?>