import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";
var products_page_header_animation = new TimelineMax();
//page header
products_page_header_animation.from(".products-header", 1, {y:150, opacity:0},1)
//last rocket

.from(".last-rocket", 1, {y:150, opacity:0},2)
//middle rocket
.from('.middle-rocket',1,{x:250,opacity:0},3)
//empty rocket
.from('.empty-rocket',1,{x:150,opacity:0},4)

products_page_header_animation.play();
//orange circles

var products_animation = new TimelineMax();
products_animation.from('.orange-circle-image',1.5,{scale:0,opacity:0},1)
//circles
.from('.circles-image',1.5,{scale:0, opacity:0},1)

//dotted line
.from('.line-image', 1.5, {x:-100, opacity:0},1)

//zigzag lines
.from('.zigzag-image', 1, {y:100, opacity:0},1)
.from('.zigzag-image-2', 1, {y:100, opacity:0},1)


products_animation.pause();

$(window).scroll(function() {
  var products_whole_section= $(".products-whole-section");
  if(products_whole_section.length!=0){
  var top_of_element = products_whole_section.offset().top;
  var bottom_of_element = products_whole_section.offset().top + products_whole_section.outerHeight();
  var top_of_screen = $(window).scrollTop();
  var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
  if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        products_animation.play();
      }
    }
});
var screenSize=$(window).width();
if($(".single-products").length != 0 && (screenSize >'1024')){
products_animation.play();
//////////////////brief animation
var Brief= new TimelineMax();
Brief.addLabel("with")
      .from('.briefImg',0.7,{x:-500,opacity:0},'with')
      .from('.briefCircle', 0.5, {scale:0.2,opacity:0},'with+=0.2')
      .from('.briefL1',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.briefL2',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.briefL11',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.briefL21',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.briefSCircle',0.5,{scale:0.2,opacity:0})
      .addLabel('zigzag')
      .from('.briefZigzag1',0.5,{x:200,opacity:0},'zigzag')
      .from('.briefZigzag2',0.5,{x:200,opacity:0},'zigzag'); 
Brief.pause();

$(window).scroll(function() {
    var brief= $(".Product__brief");
    var top_of_element = brief.offset().top;
    var bottom_of_element = brief.offset().top + brief.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        Brief.play();
    } 
 });

///////////// Product Background
var Backg= new TimelineMax();
Backg.from('.backgroundImg',0.7,{x:500,opacity:0});
Backg.pause();
$(window).scroll(function() {
    var backg= $(".Product__background");
    var top_of_element = backg.offset().top;
    var bottom_of_element = backg.offset().top + backg.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
    	Backg.play();
    } 
 });

//////////////////concept animation
var Concp= new TimelineMax();
Concp.addLabel("with")
      .from('.concept-img',0.7,{x:-500,opacity:0},'with')
      .from('.conceptCircle', 0.5, {scale:0.2,opacity:0},'with+=0.2')
      .from('.conceptL1',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.conceptL2',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.conceptL11',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.conceptL21',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.conceptLine-image',0.5,{x:-100,opacity:0})
      .addLabel('zigzag')
      .from('.conceptZigzag-image',0.5,{x:200,opacity:0},'zigzag')
      .from('.conceptZigzag-image-2',0.5,{x:200,opacity:0},'zigzag'); 
Concp.pause();

$(window).scroll(function() {
    var concpt= $(".Product__concept");
    var top_of_element = concpt.offset().top;
    var bottom_of_element = concpt.offset().top + concpt.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        Concp.play();
    } 
 });

//////////////////final animation
var Final= new TimelineMax();
Final.addLabel("with")
      .from('.final-img',0.7,{x:-500,opacity:0},'with')
      .from('.finalCircle', 0.5, {scale:0.2,opacity:0},'with+=0.2')
      .from('.finalL1',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.finalL2',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.finalL11',0.5,{y:100,opacity:0},'with+=0.4')
      .from('.finalL21',0.5,{y:100,opacity:0},'with+=0.6')
      .from('.finalSCircle',0.5,{scale:0.2,opacity:0})
      .from('.finalLine-image',0.5,{x:-100,opacity:0});
Final.pause();

$(window).scroll(function() {
    var final= $(".Product__final");
    var top_of_element = final.offset().top;
    var bottom_of_element = final.offset().top + final.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        Final.play();
    } 
 });

}