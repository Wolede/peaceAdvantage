$(document).ready(function(){
   $('.drop').dropdown();
    
    $('.right.sidebar').first().sidebar('setting', 'transition', 'overlay').sidebar('attach events', '.triggerSide')
;
    $('.triggerSide')
      .removeClass('disabled')
    ; 
    
    $('a[href^="#"]').click(function(evennt){
       var target = $($(this).attr('href'));
       if(target.length){
           event.preventDefault();
           $('html, body').animate({
               scrollTop: target.offset().top
           }, 1000);
       }
   });
    $('#followMenu').hide();
    $('.masthead').visibility({
          once: false,
          onBottomPassed: function() {
            $('#followMenu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('#followMenu').transition('fade out');
          }
        })
      ;
});