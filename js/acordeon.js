$(document).ready(function(){

 $(".acordeon h3:first").addClass("hide");
 $(".acordeon div:not(:first)").hide();

 $(".acordeon h3").click(function(){
 $(this).next("div").slideToggle("slow")
 .siblings("div:visible").slideUp("slow");
 $(this).toggleClass("active");
 $(this).siblings("h3").removeClass("active");
 });

});

$(document).ready(function(){

 $(".acordeon2 h3:first").addClass("hide");
 $(".acordeon2 div:not(:first)").hide();

 $(".acordeon2 h3").click(function(){
 $(this).next("div").slideToggle("slow")
 .siblings("div:visible").slideUp("slow");
 $(this).toggleClass("active");
 $(this).siblings("h3").removeClass("active");
 });

});