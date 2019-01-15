import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";
//page header
TweenMax.from(".products-header", 1, {y:150, opacity:0});
//last rocket
TweenMax.from(".last-rocket", 1, {y:150, opacity:0});
//middle rocket
TweenMax.from('.middle-rocket',1,{x:2,opacity:0})
//empty rocket
TweenMax.from('.empty-rocket',1,{x:150,opacity:0})


//orange circles
var proImg= new TimelineMax();
proImg.from('.orange-circle-image',0.8,{scale:0,opacity:0})
//circles
.from('.circles-image',0.8,{scale:0, opacity:0})

//dotted line
.from('.line-image', 0.5, {x:-100,opacity:0})

//zigzag lines
.addLabel('zigzag')
.from('.zigzag-image', 0.5, {y:100, opacity:0},'zigzag')
.from('.zigzag-image-2', 0.5, {y:100, opacity:0},'zigzag');

if($(".single-products").length != 0){

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