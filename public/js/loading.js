// set delay 10s
var delay = 3000;

$(window).on('load', function() {
    setTimeout(function(){
        $("#loading").hide();
        $(".loader").hide();
    },delay);
});
