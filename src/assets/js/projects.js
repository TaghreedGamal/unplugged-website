// List View
$('[list-view]').on('click',function(){
	$('.filter-icons button').css( "opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1')); 
  $(".project-section__post").removeClass("grid");
  $(".box__text,#post-icons,.grouped-buttons").removeClass("hide");
  $(".box__title").removeClass("font-size"); 
  $(".box__title span").removeClass("span-font-size"); 
  $(".project-section__post__box").removeClass("boxsize");
  $(".project-section__post__image").removeClass("imagesize");

})

// Grid View
$('[grid-view]').on('click',function(){
  $('.filter-icons button').css("opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1'));
  $(".project-section__post").addClass("grid");
  $(" .box__text,#post-icons,.grouped-buttons ").addClass("hide");
  $(".project-section__post__box").addClass("boxsize"); 
  $(".box__title").addClass("font-size"); 
  $(".box__title span").addClass("span-font-size"); 
  $(".project-section__post__image").addClass("imagesize");
 
  $(".project-section__post__box").hover(
  	function(){ 
  		$(this).find('.grouped-buttons').removeClass('hide');
  		$(this).css("height","180px");
  		$(this.getElementsByClassName(".box__title")).css("transform", 'translateY(-20px)');
     }
  	,function(){
  		$(this).find('.grouped-buttons').addClass('hide');
  		$(this).css("height","auto");
  		$(this.getElementsByClassName(".box__title")).css("transform", 'translateY(0px)');
  	}
  	);
})

$(".scroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#pIdea").offset().top},
        'slow');
});
$(".top").click(function() {
    $('html,body').animate({
        scrollTop: $(".main-container").offset().top},
        'slow');
});
// $(window).scroll(function() {
//   var target = document.getElementsByClassName('top');
//   console.log(target)
//   if(window.pageYOffset > 500){
//    target[0].style.display = "block"; 
//   }
//   else if(window.pageYOffset < 500){
//     target[0].style.display = "none";
//   }
// });

// $('.cycle-slider').slick({
//      centerMode: true,
//   infinite: true,
//   centerPadding: '150px',
//   slidesToShow: 1,
//   speed: 500,
//   variableWidth: false,
//   arrow:true,
//  });
