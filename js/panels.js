var $j = jQuery.noConflict();

$j(document).ready(function() {
    $j('#panels').removeClass('no-js');
    
    
    $j('.hover-panel').hover(hoverIn,hoverOut);
});

hoverIn = function(){
    $j(this).animate({backgroundPosition: '0 -128px'});
}

hoverOut = function(){
    $j(this).animate({backgroundPosition: '0 0'});
}