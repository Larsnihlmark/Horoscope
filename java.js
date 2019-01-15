$(document).ready(function(){

    viewHoroscope = function(){
        $.ajax({
            url:"viewHoroscope.php",
            method: "GET",
            success: function(results){
                $(".content").html(results);
            }
        })
    }


viewHoroscope();
$("#visaHoroscope").click(function(){
    viewHoroscope();
});

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
            }
        }
    });
});

    $("#uppdateraHoroscope").click(function(){
        $.ajax({
            url:"updateHoroscope.php",
            method: "PUT",
            data:{
                "personNr": $("#angivetNummer").val()
            },
            success: function(results){
                if(results == true){
                    viewHoroscope();
                }   else  {
                    $(".content").html(results);
                }
            }
        }); 
    });

    $("#raderaHoroscope").click(function(){
                
        $.ajax({
            url:"deleteHoroscope.php",
            method: "DELETE",
            data:{
                "personNr": $("#angivetNummer").val()
            },
            success: function(results){
                $(".content").html(results);
            }
        });   
    });
});