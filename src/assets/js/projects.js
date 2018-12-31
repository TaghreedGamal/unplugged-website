// List View
$('[list-view]').on('click',function(){
	$('.filter-icons button').css( "opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1')); 
  $(".project-section__post").removeClass("grid");
  $(".box__text,#post-icons,.grouped-buttons").removeClass("hide");
  $('.grouped-buttons a.button').removeClass('buttonChange');
  $(".box__title").removeClass("font-size"); 
  $(".box__title span").removeClass("span-font-size"); 
  $(".project-section__post__box").removeClass("boxsize");
  $(".project-section__post__image").removeClass("imagesize");
  $(".box__title").css("transform", 'translateY(0px)');

})

// Grid View
$('[grid-view]').on('click',function(){
  $('.filter-icons button').css("opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1'));
  $(".project-section__post").addClass("grid");
  $(".box__text,#post-icons,.grouped-buttons ").addClass("hide");
  $(".project-section__post__box").addClass("boxsize"); 
  $(".box__title").addClass("font-size"); 
  $(".box__title span").addClass("span-font-size"); 
  $(".project-section__post__image").addClass("imagesize");
})

$(".scroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#pIdea").offset().top},'slow');
    $('.top').fadeIn();
});
$(".top").click(function() {
    $('html,body').animate({scrollTop: $(".main-container").offset().top},'slow');
});
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.top').fadeIn();
  } else {
    $('.top').fadeOut();
  }
});

if($(".single-projects").length != 0){
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


// $("li#slide1").click(function(){
//   console.log("clickeeed");
//   $(this).animate({left:'200px'});

// })
 $( "li#slide1" ).each(function( index ) {
  console.log( index + ": " + $( this ).text() );
  if(index==0){
    $(this).addClass("leftSlider");
  }
  else if (index==1){
    $(this).addClass("centerSlider");
  }
  else if (index==2){
    $(this).addClass("rightSlider");
  }
 });

 $( "li#slide1").click(function(){
      if ($(this).hasClass("leftSlider")) {
        $(this).removeClass().addClass("goCenter");
        $(this).next().removeClass().addClass("goRight");
        $(this).next().next().removeClass().addClass("goLeft");
      }
      else if ($(this).hasClass("rightSlider")) {
        $(this).removeClass().addClass("goCenter");
        $(this).prev().removeClass().addClass("goLeft");
        $(this).prev().prev().removeClass().addClass("goRight");
      }
      else if ($(this).hasClass("goRight")) {
        $(this).removeClass().addClass("goCenter");
        $(this).prev().removeClass().addClass("goLeft");
        $(this).prev().prev().removeClass().addClass("goRight");
      }
      if ($(this).hasClass("goLeft")) {
        $(this).removeClass().addClass("goCenter");
        $(this).next().removeClass().addClass("goRight");
        $(this).next().next().removeClass().addClass("goLeft");
      }
  })
}
