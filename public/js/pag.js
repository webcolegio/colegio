function ocultarFields(){
    
    var cant = $(".formulario > fieldset").length;
    
    for(i=2;i<=cant;i++){
        
        $("#field"+i).hide();
        
    }
    
}

PosActual = 1

function nextField(){
    
    var cant = $(".formulario > fieldset").length;
    
    console.log(cant);
    
    if((PosActual+1) <= cant){
        $("#field"+PosActual).slideUp("slow");
        $("#field"+(PosActual+1)).slideDown("slow");
        PosActual =  PosActual+1;
        
    }
    else{
        $("#field"+PosActual).slideUp("slow");
        $("#field1").slideDown("slow");
        PosActual =  1;
    }
    if(PosActual >= cant){
        $("#siguiente").hide();
    }
    
}

$(document).ready(function(){
    
    ocultarFields();
    $("#siguiente").on("click",function(){
        nextField();
    });
    
    $('#myCarousel').carousel({
        interval: 3000
    });
    
    $('#myCarousel').css("height","500");
});