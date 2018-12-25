// List View
$('[list-view]').on('click',function(){
  $(this).fadeTo( "slow", $(this).css("opacity",'1')); 
  $(".project-section__post").removeClass("grid");
  $(".entry-content, #post-icons , #proj-buttons").removeClass("hide");
  $(".project-section__post__box").removeClass("boxsize");
  $(".project-section__post__image").removeClass("imagesize");

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
})