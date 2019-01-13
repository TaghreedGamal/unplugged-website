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
