AOS.init();

$(".chosen-select").chosen();

(function($){
    $(window).on("load",function(){
        $(".content").mCustomScrollbar();
    });
})(jQuery);

$(document).ready(function() {

$('.tarif_tab_links  a').on('click', function(e) {
    var currentNewsValue = $(this).attr('href');
        
            $('.tarif_tab').hide();
            $(currentNewsValue).fadeIn(500);
        
    
    $(this).parent().addClass('active').siblings().removeClass('active');
    e.preventDefault();
});
});

$('.news_slider.owl-carousel').owlCarousel({
    margin:30,
    loop:true,
    nav:true,
    autoWidth:true,
    items:1,
});


$( function() {
    $( ".datepicker" ).datepicker();
} );


  $(document).ready(function(){
    var $tabs =  $('.faq_open').click(function(event){
         //$('.faq_desc').slideUp();
         $(this).next('.faq_desc').stop().slideToggle();
         var $parent = $(this);
         if ($parent.is('.active')) {
             $parent.removeClass('active');
             
             return;
         }
         
           
           $parent.addClass("active");
     });  

 });
