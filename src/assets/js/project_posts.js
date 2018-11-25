// List View
$('[list-view]').on('click',function(){
  $(this).fadeTo( "slow", $(this).css("opacity",'1')); 
  $(".project-section__post").removeClass("grid");
  $(".entry-content, #post-icons , #proj-buttons").removeClass("hide");
  $(".project-section__post__box").removeClass("boxsize");
  $(".project-section__post__image").removeClass("imagesize");
    // $(".project-section__post__box").css("height","500px");
 // $(".project-section__post__box").css("padding","50px");

})

// Grid View
$('[grid-view]').on('click',function(){
  $(this).fadeTo( "slow", $(this).css("opacity",'1'));
  $(".project-section__post").addClass("grid");
  $(".entry-content, #post-icons , #proj-buttons").addClass("hide");
  $(".project-section__post__box").addClass("boxsize"); 
  $(".main-content__project-section").addClass("grid-flex");  
  $(".entry-title a").addClass("font-size"); 
  $(".project-section__post__image").addClass("imagesize");
  // $(".project-section__post__image").css("width","50%");
  // $(".project-section__post__image").css("z-index","1");
  // $(".project-section__post__image").css("transform", 'translateX(70px)');
  // $(".project-section__post__box").hover(
  // 	function(){ 
  // 		$(this).find('#proj-buttons').removeClass('hide');
  // 		$(this).css("height","220px");
  // 		$(this).css("transform", 'translateY(25px)');
  //    }
  // 	,function(){
  // 		$(this).find('#proj-buttons').addClass('hide');
  // 		$(this).css("height","150px");
  // 		$(this).css("transform", 'translateY(90px)');
  // 	}
  // 	);
})