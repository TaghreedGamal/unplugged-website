import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";
//last rocket
TweenMax.from(".last-rocket", 1, {y:150});
//middle rocket
TweenMax.from('.middle-rocket',1,{x:250, delay:1,opacity:0})
//empty rocket
TweenMax.from('.empty-rocket',1,{x:150, delay:2,opacity:0})
