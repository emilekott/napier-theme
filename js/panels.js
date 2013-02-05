var $j = jQuery.noConflict();

$j(document).ready(function() {
    $j('#panels').removeClass('no-js');
    
    
    $j('.hover-panel div').hover(hoverIn,hoverOut);
});

hoverIn = function(){
    $j(this).animate({backgroundPositionY: "-128px"},500);
}

hoverOut = function(){
    $j(this).animate({backgroundPositionY: "0"},500);
}