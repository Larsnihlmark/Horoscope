<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "GET"){

    if($_SESSION == null){
        echo "<p>Det finns inget horoskop sparat</p>";
    }
    else{
        echo ($_SESSION["horoscope"]);
    }
}
?>