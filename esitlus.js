$( "#ddlinks" ).children()
  .mouseover(function() {
    $("#ddtooltip").children().css("display","none");
    $("#ddtooltip").children().eq($(this).index()).css("display","flex");
  })
  .mouseout(function() {
    $("#ddtooltip").children().eq($(this).index()).css("display","flex");
  });


function toggleNav() {
    $("#mySidenav").toggleClass("wif250")
}