
$(document).ready(function(){
$( ".form-type-managed-file label" ).wrapInner( "<div class='new'></div>");
alert("hel");
});


Jquery("button").click(function($){
    $(".captcha").prepend("<p>Security Code</p>");
});

/* equal heigh function */
equalheight = function(container){
var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 Jquery(container).each(function($) {
   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

Jquery(window).load(function($) {
    equalheight('.eql_height');  
});
Jquery(window).resize(function($){
  equalheight('.eql_height');
});
