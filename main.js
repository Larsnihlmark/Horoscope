$(document).ready(function(){
// Se vad som har sparat i php och skriver ut den i ett knapp click
viewHoroscope();
});

viewHoroscope = function(){
    $.ajax({
        url:"viewHoroscope.php",
        method: "GET",
        success: function(results){
            $(".content").html(results);
        }
    })
}
$("#visaHoroscope").click(function(){
    viewHoroscope();
});
//Sparar vi ett nummer till php file för att kunna hämta den
$("#sparaHoroscope").click(function(){

    $.ajax({
        url:"addHoroscope.php",
        method:"POST",
        data:{
            "personNr": $("#angivetnummer").val()
        },
        success: function(results){
            if(results == true){
                viewHoroscope();
            }
            else {
                $(".content").html(results);
                console.error(status.error, results);
            }
        }
    });
});
// uppdatera vi för att kunna spara om
    $("#uppdateraHoroscope").click(function(){
        $.ajax({
            url:"updateHoroscope.php",
            method: "PUT",
            data:{
                "personNr": $("#angivetnummer").val()
            },
            success: function(results){
                if(results == true){
                    viewHoroscope();
                }   else  {
                    $(".content").html(results);
                    console.error(status.error, results);
                }
            }
        }); 
    });
//delete vi det vi har sparat i php file
    $("#raderaHoroscope").click(function(){
                
        $.ajax({
            url:"deleteHoroscope.php",
            method: "DELETE",
            data:{
                "personNr": $("#angivetnummer").val()
            },
            success: function(results){
                $(".content").html(results);
                console.error(status.error, results);
            }
        });   
    });