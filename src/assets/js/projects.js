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