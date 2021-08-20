jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.header .mymain-navigation').slideToggle(500);
  
        e.preventDefault();
    });
    jQuery(".to-catalog a").click(function(event){
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
        });
        
});