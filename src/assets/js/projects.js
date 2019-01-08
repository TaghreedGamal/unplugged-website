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
  $(".project-section__post__box__content").removeClass("gridcontent");
  $(".project-section__post__box__image").removeClass("imagesize");
  $(".box__title").css("transform", 'translateY(0px)');

})

// Grid View
$('[grid-view]').on('click',function(){
  $('.filter-icons button').css("opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1'));
  $(".project-section__post").addClass("grid");
  $(".box__text,#post-icons,.grouped-buttons ").addClass("hide");
  $(".project-section__post__box").addClass("boxsize"); 
  $(".project-section__post__box__content").addClass("gridcontent");
  $(".box__title").addClass("font-size"); 
  $(".box__title span").addClass("span-font-size"); 
  $(".project-section__post__box__image").addClass("imagesize");
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
/// slider animation
// var slideNo=$(".tabs-panel.is-active #slider ul li#slide").length;
var slideNo,center;
function calculateSlider(){
  slideNo=$(".tabs-panel.is-active #slider ul li#slide").length;
  center=Math.round(slideNo/2);
  // left=center -1;
  // right=center+1;
   $( ".tabs-panel.is-active #slider ul li#slide" ).each(function( index ) {
      index=index+1; 
      //only 2 slides
      if (slideNo==2){
         if (index==1){
           $(this).addClass("setleft");
         }
         else if(index==2){
           $(this).addClass("setright");
         }
      }
      // only 3 slides
      else if (slideNo==3){
        if (index==center){
          $(this).addClass("centerSlider");
        }
        else if (index == center -1){
          $(this).addClass("leftSlider");
        }
        else if (index == center +1){
          $(this).addClass("rightSlider");
        }
      }
      // more than 3 slides
      else {
      if (index==center){
        $(this).addClass("centerSlider");
      }
      else if (index == center -1){
        $(this).addClass("leftSlider");
      }
      else if (index == center +1){
        $(this).addClass("rightSlider");
      }
      else if(index < center && !(index== 1)){
        $(this).addClass("leftSlider"); 
      }
      else if(index > center  && !(index == slideNo)){
        $(this).addClass("rightSlider"); 
      }
    }
    })
   $( "li#slide").click(function(){
     $(this).removeClass().addClass("centerSlider");
     // next and prev found 
     if($(this).prev("li").length >0 && $(this).next("li").length > 0){
        console.log("condition3");
        $(this).next().removeClass().addClass("rightSlider");
        $(this).next().next().removeClass().addClass("left2Slider");
        $(this).prev().removeClass().addClass("leftSlider");
        $(this).prev().prev().removeClass().addClass("right2Slider");
      }
      else {
          console.log("condition2");
          $(this).prev().prev().removeClass().addClass("rightSlider");
          $(this).prev().removeClass().addClass("leftSlider");
          $(this).next().removeClass().addClass("rightSlider");
          $(this).next().next().removeClass().addClass("leftSlider");
      }
   });
}

calculateSlider();

$('#slide-tabs').on('change.zf.tabs', function() {
   calculateSlider();
});


 // $( "li#slide" ).each(function( index ) {
 //  console.log( index + ": " + $( this ).text() );
 //  if(index==0){
 //    $(this).addClass("leftSlider");
 //  }
 //  else if (index==1){
 //    $(this).addClass("centerSlider");
 //  }
 //  else if (index==2){
 //    $(this).addClass("rightSlider");
 //  }
 // });

 // $( "li#slide").click(function(){
 //    $(this).parent().find("leftSlider").removeClass("leftSlider").addClass("rightSlider");
 //    $(this).parent().find("rightSlider").removeClass("rightSlider").addClass("leftSlider");
 //    $(this).removeClass().addClass("centerSlider");


 //      if ($(this).hasClass("leftSlider")) {
 //        $(this).removeClass().addClass("centerSlider");
 //        $(this).next().removeClass().addClass("rightSlider");
 //        $(this).next().next().removeClass().addClass("leftSlider");
 //      }
 //      else if ($(this).hasClass("rightSlider")) {
 //        $(this).removeClass().addClass("centerSlider");
 //        $(this).prev().removeClass().addClass("leftSlider");
 //        $(this).prev().prev().removeClass().addClass("rightSlider");
 //      }
 //      else if ($(this).hasClass("rightSlider")) {
 //        $(this).removeClass().addClass("centerSlider");
 //        $(this).prev().removeClass().addClass("rightSlider");
 //        $(this).next().removeClass().addClass("leftSlider");
 //      }
 //      else if ($(this).hasClass("leftSlider")) {
 //        $(this).removeClass().addClass("centerSlider");
 //        $(this).next().removeClass().addClass("leftSlider");
 //        $(this).prev().removeClass().addClass("rightSlider");
 //      }
 //  })
}
