
$(document).ready(function() {
const headeratstart = $(".headerasendus").eq(0).outerHeight(); //headeri asenduse kõrgus alguses

//if tooted/esimene bar on olemas, võta selle kõrgus ja offset
if($("#tooted").length > 0){
    var essaoffset = $("#tooted").offset().top;
    var essakorg = $("#tooted").outerHeight();
}
else{
    essakorg = 0;
    essaoffset = 0;
}    

//if if tooted2/teine bar on olemas, võta selle kõrgus ja offset
if($(".tooted2").length > 0 ){
    var tessakorg = $(".tooted2").outerHeight();
    var tessaoffset = $(".tooted2").offset().top;
}
    
let previousScrolltop = 0;    
$(window).scroll(function(event) {
    let st = window.pageYOffset || document.documentElement.scrollTop; 
   if (st > previousScrolltop){
        $("#headerinupp").addClass("kollane");
   } else {
       $("#headerinupp").removeClass("kollane");
   }
   previousScrolltop = st;
    
   //funktsioon headeri kõrguse muutmiseks    
    function headerasendus(param){
        $(".headerasendus").eq(0).outerHeight(param);
    }
    
    let wind = $(window).scrollTop() + headeratstart; // akna kõrgus pluss headerasendus alguses
    let korg = 53; // headeri kõrgus mis on muudetav
    /* Go to top button */
    
    if (wind > 100) {
        document.getElementById("up").style.display = "block";
    } else {
        document.getElementById("up").style.display = "none";
    }
    
    /* go to top button end */ 
    
    
    if($("#tooted").length > 0){
    headerasendus(headeratstart + essakorg);
    if (wind >= essaoffset){
       
        //korg = headeratstart;
        $("#tooted").addClass("icky");
        $("#tooted").css("top", "53px");
    }
        else{
            headerasendus(headeratstart);  
            $("#tooted").removeClass("icky");
            $("#tooted").css("top", "auto");
        }
    } 


    if($(".tooted2").length > 0){
            wind += essaoffset;
         if(wind >= tessaoffset){ 
            headerasendus(headeratstart + tessakorg);
            $("div.tooted2").css("position", "fixed");
            $("div.tooted2").css("z-index", "4"); 
            $("div.tooted2").css("background-color", "white");
            $("div.tooted2").css("top", essakorg + headeratstart + "px");  
            if($("#tooted").length > 0){
                headerasendus(headeratstart + essakorg + tessakorg);
                $("div.tooted2").css("top", (headeratstart + essakorg - 2) + "px"); 
            }

        }
        else{
            headerasendus(headeratstart + essakorg);
            $("div.tooted2").css("position", "static");
        }    

    }
    
    
});  // end window onscroll       
    
    
    // scroll to bot if liitu uudiskirjaga õnnestus
   if($("#vestus").length > 0){
        if($("#vestus")[0].innerHTML.length > 1){ 
            $('html, body').animate({
                    scrollTop: $("#alumine").offset().top - headeratstart
                    }, 300)
            }
        }
    
    if($("#vostus").length > 0){
        if($("#vostus")[0].innerHTML.length > 1){ 
            $('html').animate({
                    scrollTop: $("#keskmine").offset().top - headeratstart
                    }, 2000) 
            }
    }
        
    
   
    
   
    //Smooth Scrolling for a tags with .scroll class
    const scrollLink = $('.scroll');
    scrollLink.click(function (e) {
        e.preventDefault();
        $('body, html').animate({
            scrollTop: $(this.hash).offset().top - headeratstart
            }, 300, ); 
    });
   
    
    // vajab üle vaatamist
   const topLink = $(".toplink");
    topLink.click(function() {
            $('body, html').animate({
            scrollTop: essaoffset - headeratstart
            }, 300, );   
    });
    
    const subLink = $(".sublink");
    subLink.click(function() {
        //console.log("this sublinkstart" + ($(this).offset().top - headeratstart));
        //e.preventDefault();
        $('body, html').animate({
            scrollTop: tessaoffset - headeratstart
            }, 300, );
        //console.log("this sublinkend" + ($(this).offset().top - headeratstart));
    });
 
}); // end document ready










                     
