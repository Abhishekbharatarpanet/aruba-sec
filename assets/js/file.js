$( document ).ready(function() {
    $('.dropdown-img').on('click',function(){

        $(this).siblings('ul').toggle(300) 
        
    });


    $('.payments-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        margin:20,
        arrows:true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }

          ]
      });


      $('.payments-slider .slick-prev').html("<div class='arrows prev-arrow'><i class='fa-solid fa-arrow-left'></i></div>")
      $('.payments-slider .slick-next').html("<div class='arrows next-arrow'><i class='fa-solid fa-arrow-right'></i></div>")
      
       
      let has_childs = document.querySelectorAll(".has-childs ul li a");

      has_childs.forEach((childs) => {
        if (childs.classList == "active") {
          let Perent_name = childs.parentElement.parentElement.parentElement;
          Perent_name.classList.add("active_perents")
        }
      });
});