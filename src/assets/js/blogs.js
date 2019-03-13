//import slick from "slick-carousel";

$(document).ready(function(){





if($(window).width()<=414)
{
  $('.featured-articles-slider').slick({
    dots: true
  });
}
else{
  $('.featured-articles-slider').slick({
         centerMode: true,
         centerPadding: '300px',
         slidesToShow: 1,
         draggable: true,
         infinite: true,
         dots:true,
         arrows: false,
         slidesToScroll: 1,
         responsive: [
           {
             breakpoint: 1340,
             settings: {
               centerPadding:'200px'
             }
           },
           {
             breakpoint: 450,
             settings: 'unslick',
             // {
             //   //centerMode:false,
             //   infinite: false,
             //   centerPadding: '0px',
             // }
           }
           // You can unslick at a given breakpoint now by adding:
           // settings: "unslick"
           // instead of a settings object
         ]
       });
}
});

$('.scroll-top-button').click(function(){
  console.log('scrolled')
    $('.single-blogs-page-container').animate({
        scrollTop: 0
    }, 2000);
});

//archive blogs
//typewriters
var typewriters_animation = new TimelineMax();
typewriters_animation.from('.small-typewriter', 2, {y:200, opacity:0},1)
                     .from('.typewriter', 2, {y:200, opacity:0},1)
                     .from('.blogs-header',2 ,{y:200, opacity:0},0)
//baby blue semi circle
                      .from('.blue-semi-circle', 2, {scale:0,  opacity:0},2)
                      .from('.blue-semi-circle-2', 2, {scale:0, opacity:0},2)

//zigzags
                      .from('.zigzag-line-5', 1, {y:200,  opacity:0},3)
                      .from('.zigzag-line-6', 1, {y:200, opacity:0},3)
//dark blue circle
                      .from('.dark-blue-circle', 1, {scale:0, opacity:0},3)
//orange lines
                      .from('.orange-line-1', 1, {x:100, opacity:0},3)
                      .from('.orange-line-2', 1, {x:100, opacity:0},3)

typewriters_animation.play();
//slider
var slides_animation = new TimelineMax();
slides_animation.from('.featured-articles-slider .zigzag-line-1', 0.5, {y:50, opacity:0},1)
                .from('.featured-articles-slider .zigzag-line-2',0.5,{y:50, opacity:0},1)
                .from('.featured-articles-slider .zigzag-line-3', 0.5, {y:50, opacity:0},1)
                .from('.featured-articles-slider .zigzag-line-4', 0.5, {y:50, opacity:0},1)
                .from('.featured-articles-slider .orange-circle', 0.5, {scale:0, opacity:0},1)
                .from('.featured-articles-slider .blue-line-1', 0.5, {x:100, opacity:0},1)
                .from('.featured-articles-slider .blue-line-2', 0.5, {x:100, opacity:0},1)
                .from('.featured-articles-slider .blue-line-3', 0.5, {x:100, opacity:0},1)
                .from('.featured-articles-slider .blue-line-4', 0.5, {x:100, opacity:0},1)
slides_animation.pause();
$(window).scroll(function() {
  var featured_articles_slider= $(".featured-articles-slider");
  if(featured_articles_slider.length!=0){
  var top_of_element = featured_articles_slider.offset().top;
  var bottom_of_element = featured_articles_slider.offset().top + featured_articles_slider.outerHeight();
  var top_of_screen = $(window).scrollTop();
  var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
  if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        slides_animation.play();
      }
    }
});

//latest artciles
var latest_artciles_animation = new TimelineMax();
latest_artciles_animation.from('.article .zigzag-line-1', 0.5, {y:50, opacity:0},1)
                .from('.article .zigzag-line-2',0.5,{y:50, opacity:0},1)
                .from('.article .zigzag-line-3', 0.5, {y:50, opacity:0},1)
                .from('.article .zigzag-line-4', 0.5, {y:50, opacity:0},1)
                .from('.article .orange-circle', 0.5, {scale:0, opacity:0},1)
                .from('.article .blue-line-1', 0.5, {x:100, opacity:0},1)
                .from('.article .blue-line-2', 0.5, {x:100, opacity:0},1)
                .from('.article .blue-line-3', 0.5, {x:100, opacity:0},1)
                .from('.article .blue-line-4', 0.5, {x:100, opacity:0},1)
latest_artciles_animation.pause();
$(window).scroll(function() {
  var articles_container= $(".articles-container");
  if(articles_container.length!=0){
  var top_of_element = articles_container.offset().top;
  var bottom_of_element = articles_container.offset().top + articles_container.outerHeight();
  var top_of_screen = $(window).scrollTop();
  var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
  if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        latest_artciles_animation.play();
      }
    }
});

//single blogs
var blog_content_animation = new TimelineMax();
blog_content_animation.from('.single-blog', 1.5, {y:500, opacity:0},1)
                      .from('.author-avatar', 1, {scale:0, opacity:0},1)
                      .from('.author-avatar .purple-line-1', 0.5,{x:50, opacity:0},2)
                      .from('.author-avatar .purple-line-2', 0.5,{x:50, opacity:0},2)
                      .from('.author-avatar .purple-line-3', 0.5,{x:50, opacity:0},2)
                      .from('.author-avatar .purple-line-4', 0.5,{x:50, opacity:0},2)
                      .from('.author-avatar .zigzag-1', 0.5,{y:50, opacity:0},2)
                      .from('.author-avatar .zigzag-2', 0.5,{y:50, opacity:0},2)
blog_content_animation.play();


var blog_controls_animation = new TimelineMax();
blog_controls_animation.from('.blog-controls .next-post .zigzag-1', 0.5,{y:50, opacity:0},1)
                     .from('.blog-controls .next-post .zigzag-2', 0.5,{y:50, opacity:0},1)
                     .from('.blog-controls .next-post .zigzag-3', 0.5,{y:50, opacity:0},1)
                     .from('.blog-controls .next-post .zigzag-4', 0.5,{y:50, opacity:0},1)
blog_controls_animation.pause();
$(window).scroll(function() {
  var blog_controls= $(".blog-controls");
  if(blog_controls.length!=0){

  var top_of_element = blog_controls.offset().top;
  var bottom_of_element = blog_controls.offset().top + blog_controls.outerHeight();
  var top_of_screen = $(window).scrollTop();
  var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
  if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        blog_controls_animation.play();
      }
    }
});


//
jQuery(document).ready( function($) {
    if($('.loadmorehidden').children()[0]==undefined){
        $(".latest-articles-section .load-more").remove();
    }
  var ppp = 3; // Post per page
  var pageNumber = 1;

function load_posts(){
  pageNumber++;
  var str =  '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
  // console.log($('.loadmorehidden').children()[0])
  if($('.loadmorehidden').children()[0]!=undefined){
  $.ajax({
      type: "POST",
      dataType: "html",
      url: $('.loadmorehidden').children()[0].href,
      data: str,
      success: function(data){
          var $data = $(data);
          if($data.length){
            let new_load_more_hidden_button = $data.find('.articles-container .loadmorehidden');
            // let new_load_more_button = $data.find('.articles-container .load-more');
            let articles = $data.find('.articles-container .article');

              $('.articles-container .loadmorehidden').remove();
              // let new_load_more_button=   $(".articles-container .load-more").clone();
              // $(".articles-container .load-more").remove();

              $(".articles-container").append(articles);

              $('.articles-container').append(new_load_more_hidden_button);
                if($('.articles-container .loadmorehidden').children()[0]!=undefined){
              // $(".latest").append($(".articles-container .load-more"));
            }
            else{
              $(".latest-articles-section .load-more").remove();
            }

              $(".load-more").attr("disabled",false);
          } else{
              $(".load-more").attr("disabled",true);
          }
      },
      error : function(jqXHR, textStatus, errorThrown) {
          $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
      }

  });
  return false;
}
}

    $(".load-more").on("click",function(){ // When btn is pressed.
      if($('.loadmorehidden').children()[0]!=undefined){
      // console.log($('.loadmorehidden').children()[0])
      $(".load-more").attr("disabled",true); // Disable the button, temp.
      // alert('clicked')
      load_posts();
    }

    });

});

if($('.single-blogs-page-container .blog-controls').children().length==1)
{
  if($('.single-blogs-page-container .blog-controls').children()[0].className == 'previous-post')
  {
    // console.log("yes");
    $('.single-blogs-page-container .blog-controls').children()[0].style.display = "flex";
  }
}
