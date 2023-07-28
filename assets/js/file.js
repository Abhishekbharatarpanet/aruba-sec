$( document ).ready(function() {
    $('.dropdown-img').on('click',function(){

        $(this).siblings('ul').toggle(300) 
        
    });


    $('.payments-slider').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 7,
        margin:10,
      });
              

});