import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";
//page header
TweenMax.from(".products-header", 1, {y:150, opacity:0});
//last rocket
TweenMax.from(".last-rocket", 1, {y:150, delay:1, opacity:0});
//middle rocket
TweenMax.from('.middle-rocket',1,{x:250, delay:2,opacity:0})
//empty rocket
TweenMax.from('.empty-rocket',1,{x:150, delay:3,opacity:0})


//orange circles
TweenMax.from('.orange-circle-image',1.5,{scale:0,opacity:0})
//circles
TweenMax.from('.circles-image',1.5,{scale:0, delay:1.5, opacity:0})
