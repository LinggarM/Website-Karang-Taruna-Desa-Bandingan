jQuery(document).ready(function($) {

     $("#btn-search").click(function() {
        $(".site-header .form-holder").show("fast");
    }); 

    $('.btn-close-form').click(function(){
        $('.header-two .form-holder').hide("fast");
    });

    $(window).keyup(function(event){
        if(event.key == 'Escape') {
            $('.form-holder').hide("fast");    
        }
    });
});