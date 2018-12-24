$(document).ready(function(){
    $("#fade").fadeIn(1000);   
});
$(document).ready(function() {
    
    // à chaque scroll
    $(window).scroll( function(){
    
        // va interroger la locatlisation de chaque élement 
        $('.hide').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            //si l'objet est
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    
}); 

//$(document).ready(function(){
  //  $(".main-navToggle").click(function(){
    //    (".main-nav").removeClass(".main-nav-open");
    //});
//});