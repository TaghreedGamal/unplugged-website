///header animation

var careers_header_animation = new TimelineMax();
careers_header_animation.from('.small-paper-clip-images .small-paper-clip', 1, {y:50, opacity:0},1)
                .from('.large-paper-clip-images .large-paper-clip', 1, {y:50, opacity:0},1)
                .from('.careers-page-container-header h1', 1, {y:50, opacity:0},1)
                .from('.careers-page-container-header .join-team-button', 1, {opacity:0},1)
                .from('.small-paper-clip-images .blue-circle', 1, {scale:0, opacity:0},1)
                .from('.large-paper-clip-images .blue-circle', 1, {scale:0, opacity:0},1)
                .from('.small-paper-clip-images .dark-circle', 0.5, {scale:0, opacity:0},2)
                .from('.large-paper-clip-images .dark-circle', 0.5, {scale:0, opacity:0},2)
                .from('.small-paper-clip-images .line-1', 0.5, {y:50, opacity:0},3)
                .from('.small-paper-clip-images .line-2', 0.5, {y:50, opacity:0},3)
                .from('.large-paper-clip-images .zigzag-1', 0.5, {y:50, opacity:0},3)
                .from('.large-paper-clip-images .zigzag-2', 0.5, {y:50, opacity:0},3)





var who_we_hire_animation = new TimelineMax();
who_we_hire_animation.from('.who-we-hire-section .who-we-hire-image .bike-image', 1, {x:-100, opacity:0},1)
                      .from('.who-we-hire-section .who-we-hire-image .blue-circle',1,{scale: 0, opacity:0},1)
                      .from('.who-we-hire-section .who-we-hire-image .line', 0.5, {y:50, opacity:0},2)
                      .from('.who-we-hire-section .who-we-hire-image .curve-blue', 0.5, {y:50, opacity:0},2)
                      .from('.who-we-hire-section .who-we-hire-image .curve-orange', 0.5, {y:50, opacity:0},2)
                      .from('.who-we-hire-section .who-we-hire-image .zigzag-1', 0.5, {y:50, opacity:0},3)
                      .from('.who-we-hire-section .who-we-hire-image .zigzag-2', 0.5, {y:50, opacity:0},3)

who_we_hire_animation.pause();
$(window).scroll(function() {
  var who_we_hire_section= $(".who-we-hire-section");
  if(who_we_hire_section.length!=0){
  var top_of_element = who_we_hire_section.offset().top;
  var bottom_of_element = who_we_hire_section.offset().top + who_we_hire_section.outerHeight();
  var top_of_screen = $(window).scrollTop();
  var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
  if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        who_we_hire_animation.play();
      }
    }
});
