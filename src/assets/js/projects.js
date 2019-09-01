console.log($('.scroll-posts').height());

// List View
$('[list-view]').on('click',function(){
	$('.filter-icons button').css( "opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1')); 
  $('.scroll-posts').removeClass('grid-view');
})

// Grid View
var screenSize=$(window).width();
if (screenSize <= '1024'){
  $('.scroll-posts').addClass('grid-view');
  $('ul#filter-menu').hide();
}
$('[grid-view]').on('click',function(){
  $('.filter-icons button').css("opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1'));
  $('.scroll-posts').addClass('grid-view');
  $('button.defult-view').removeClass('defult-view');
})
$(".scroll").click(function() {
    // $('.remain-page').removeClass('hide-remainPage');
    $('html,body').animate({
        scrollTop: $(".scrollToInfo").offset().top},'slow');
    $('.scroll-top').fadeIn();

});
$(".scroll-top").click(function() {
    $('html,body').animate({scrollTop: $(".site-header").offset().top},'slow');
    // $('.remain-page').addClass('hide-remainPage');
});
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.scroll-top').fadeIn();
  } else {
    $('.scroll-top').fadeOut();
  }
});

if($(".single-projects").length != 0 && (screenSize >'1024')){
//single project image
var projImg = new TimelineMax();
// .from(".main-content__project-image",0.5, {x:10,opacity:0,scaleX:0,transformOrigin:"right"},0.2)
projImg.from(".main-content__project-image",0.5, {x:-800,y:200,scale:0.2,opacity:1},0.2)
.to(".main-content__project-image",1, {opacity:1},0.2)
.from(".main-content__project-content",0.5,{y:100,opacity:0},0.5)
.to(".main-content__project-content",0.6, {opacity:1},0.5)
.from(".close-page",1,{opacity:0});

// idea-img
var ideaImg = new TimelineMax();
    ideaImg.addLabel("with")
      .from('.ideaImg',0.7,{x:-500,opacity:0},'with')
      .from('.ideaCircle', 0.7, {scale:0.2,opacity:0},'with+=0.2')
      .from('.ideaL1',0.5,{y:500,opacity:0},'with+=0.4')
      .from('.ideaL11',0.5,{y:500,opacity:0},'with+=0.6')
      .from('.ideaL2',0.5,{y:500,opacity:0},'with+=0.4')
      .from('.ideaL21',0.5,{y:500,opacity:0},'with+=0.6')
      .from('.ideaSCircle',0.7,{scale:0.2,opacity:0})
      .addLabel('zig')
      .from('.ideaZigzag1',0.5,{x:200,opacity:0},'zig')
      .from('.ideaZigzag2',0.5,{x:200,opacity:0},'zig'); 
ideaImg.pause();
$(window).scroll(function() {
    var idea= $(".project__Idea");
    var top_of_element = idea.offset().top;
    var bottom_of_element = idea.offset().top + idea.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
         ideaImg.play();
        }
 });

// finalResult-img
var finalImg = new TimelineMax();
    finalImg.addLabel("with")
      .from('.finalImg',0.7,{x:-500,opacity:0},'with')
      .from('.finalCircle', 0.7, {scale:0.2,opacity:0},'with+=0.2')
      .from('.purplepath',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.orangepath',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.smallCircle',0.5,{x:-100,opacity:0})
      .addLabel('line')
      .from('.circleLine1',0.5,{x:-200,opacity:0},'line')
      .from('.circleLine2',0.5,{x:-200,opacity:0},'line'); 
finalImg.pause();
$(window).scroll(function() {
    var final= $(".project__Final");
    var top_of_element = final.offset().top;
    var bottom_of_element = final.offset().top + final.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        finalImg.play();
    }
 });

}
// filtration menu in responsive
$('[open-filter]').on('click',function(){
   if ($('ul#filter-menu').is(":hidden")) {
    $('ul#filter-menu').show();
    $('.filter-menu').css('border-bottom','none');
   }
   else {
     $('ul#filter-menu').hide();
     $('.filter-menu').css('border-bottom','1px solid #9b9b9b');
   }
   var h=$('.filter-menu').height();
   $('.scroll-posts ').css('margin-top',h);
 });




//  $('.project-slider .tab-slider').slick({

  
//     centerMode: true,
//     centerPadding: '60px',
//     slidesToShow: 3,
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 3
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 1
//         }
//       }
//     ]
  
//  })
 $('#collapsing-tabs').on('change.zf.tabs', function(e) {

  if($('.tabs-panel.is-active').children().hasClass('tab-slider')){
    $(' .tab-slider').slick({

  
      // centerMode: true,
      // centerPadding: '60px',
      // slidesToShow: 3,
      // responsive: [
      //   {
      //     breakpoint: 768,
      //     settings: {
      //       arrows: false,
      //       centerMode: true,
      //       centerPadding: '40px',
      //       slidesToShow: 3
      //     }
      //   },
      //   {
      //     breakpoint: 480,
      //     settings: {
      //       arrows: false,
      //       centerMode: true,
      //       centerPadding: '40px',
      //       slidesToShow: 1
      //     }
      //   }
      // ]

      centerMode: true,
      centerPadding: '340px',
      slidesToShow: 1,
      draggable: true,
      infinite: true,
      dots:false,
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
    
   })
  }

});