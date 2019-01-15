import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";
var products_page_header_animation = new TimelineMax();
//page header
products_page_header_animation.from(".products-header", 1, {y:150, opacity:0},1)
//last rocket
                              .from(".last-rocket", 1, {y:150, opacity:0},2)
//middle rocket
                              .from('.middle-rocket',1,{x:250,opacity:0},3)
//empty rocket
                              .from('.empty-rocket',1,{x:150,opacity:0},4)

products_page_header_animation.play();
//orange circles
var products_animation = new TimelineMax();
products_animation.from('.orange-circle-image',1.5,{scale:0,opacity:0},1)
//circles
                  .from('.circles-image',1.5,{scale:0, opacity:0},1)

//dotted line
                  .from('.line-image', 1.5, {x:-100, opacity:0},1)

//zigzag lines
                  .from('.zigzag-image', 1, {y:100, opacity:0},1)
                  .from('.zigzag-image-2', 1, {y:100, opacity:0},1)


products_animation.pause();

$(window).scroll(function() {
  var products_whole_section= $(".products-whole-section");
  if(products_whole_section.length!=0){
  var top_of_element = products_whole_section.offset().top;
  var bottom_of_element = products_whole_section.offset().top + products_whole_section.outerHeight();
  var top_of_screen = $(window).scrollTop();
  var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
  if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        products_animation.play();
      }
    }
});
