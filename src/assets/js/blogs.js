//import slick from "slick-carousel";

$(document).ready(function(){
$('.featured-articles-slider').slick({
       centerMode: true,
       centerPadding: '300px',
       slidesToShow: 1,
       // infinite: true,
       // slidesToScroll:1,
       // autoplay:true,
       // fade: true,
       // autoplaySpeed:1000,
       dots:true,
       // slidesToScroll: 1,
       // dots: true,
       // arrows:false,
       // autoplay:false,
       // infinite: true,
       // // speed: 1500,
       // // autoplaySpeed:2100,
       // cssEase: 'linear',
       responsive: [
         {
           breakpoint: 1500,
           settings: {
             slidesToShow: 1,
             // slidesToScroll: 3,
             infinite: true,
             centerPadding:'300px',
             dots: true
           }
         },
         {
           breakpoint: 767,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
     });

});
