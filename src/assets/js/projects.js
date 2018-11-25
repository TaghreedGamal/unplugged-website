// List View
$('[list-view]').on('click',function(){
	$('.filter-icons button').css( "opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1')); 
  $(".project-section__post").removeClass("grid");
  $(".entry-content, #post-icons , #proj-buttons").removeClass("hide");
  $(".entry-title a").removeClass("font-size"); 
  $(".project-section__post__box").removeClass("boxsize");
  $(".project-section__post__image").removeClass("imagesize");

})

// Grid View
$('[grid-view]').on('click',function(){
  $('.filter-icons button').css("opacity",'0.3');
  $(this).fadeTo( "slow", $(this).css("opacity",'1'));

  // $(".main-content__project-section").addClass("grid-flex");  
  $(".project-section__post").addClass("grid");
  $(".entry-content, #post-icons ").addClass("hide");
  $(".project-section__post__box").addClass("boxsize"); 
  $(".entry-title a").addClass("font-size"); 
  $(".project-section__post__image").addClass("imagesize");
  // $(".project-section__post__box").hover(
  // 	function(){ 
  // 		$(this).find('#proj-buttons').removeClass('hide');
  // 		$(this).css("height","auto");
  // 		$(this).css("transform", 'translateY(20px)');
  //    }
  // 	,function(){
  // 		$(this).find('#proj-buttons').addClass('hide');
  // 		$(this).css("height","150px");
  // 		$(this).css("transform", 'translateY(90px)');
  // 	}
  // 	);
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
