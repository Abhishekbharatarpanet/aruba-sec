$( document ).ready(function() {
    $('.dropdown-img').on('click',function(){

        $(this).siblings('ul').toggle(300) 
        
    });


    $('.payments-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        margin:10,
        arrows:true,
      });


      $('.payments-slider .slick-prev').html("<img src='/assets/images/icons/prev.svg'>")
      $('.payments-slider .slick-next').html("<img src='/assets/images/icons/next.svg'>")
      

});