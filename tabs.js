function inspToggle(param) {
    $(".insptoggle").css("display", "none");
    $("#"+param).css("display", "block");
    /*if($("#"+param).children().find(".sublink").length > 0){
        $("#"+param).children().find(".sublink")[0].click();
    }*/
} 
function openCity(cityName) {
    $(".insp:visible").css("display", "none");
    document.getElementById(cityName).style.display = "block";
}
           
/*   function topNav(navElem) {
    
    let i;
    let x = document.getElementsByClassName("page");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(navElem).style.display = "block";
    //topFunction();    
}     */      

$(document).on("click",".sublink2", function () {
    $(".sublink2:visible").removeClass("active3");
    $(this).addClass("active3");
});

$(document).on("click",".sublink", function () {
    $(".sublink:visible").removeClass("active2");
    $(this).addClass("active2");
});
       
$(document).on("click",".toplink", function () {
    $(".toplink").removeClass("active");
    $(this).addClass("active");
});



