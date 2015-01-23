(function($){
    $(document).ready(function(){
        // Calculate window height and assign to hero area
        var wh = $(window).height();
        $('.hero-area').css('height', wh);

        // Nav affix
        $('.navbar').affix({
          offset: {
            top: wh
          }
        });
        
        $('.ajax-link').magnificPopup({
          type: 'ajax'
        });
    });
})(jQuery);