<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "GET"){

    if($_SESSION == !null){
        echo ($_SESSION["horoscope"]);
        
    }
    else{
        echo "<p>Det finns inget horoskop sparat!</p>";
    }
}
?>