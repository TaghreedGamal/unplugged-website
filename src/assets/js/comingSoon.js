import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";

var path11 = $(".top-drawLine1 path"),
    length11 = path1[0].getTotalLength();
var path22 = $(".top-drawLine2 path"),
    length22 = path2[0].getTotalLength();
var path33 = $(".botton-drawLine1 path"),
    length33 = path3[0].getTotalLength();
var path44 = $(".botton-drawLine2 path"),
    length44 = path4[0].getTotalLength();

var t = new TimelineMax();
t.set(path11, {attr:{"stroke-dasharray": length11, "stroke-dashoffset": length11}})
.set(path22, {attr:{"stroke-dasharray": length22, "stroke-dashoffset": length22}})
.set(path33, {attr:{"stroke-dasharray": length33, "stroke-dashoffset": length33}})
.set(path44, {attr:{"stroke-dasharray": length44, "stroke-dashoffset": length44}});

var coming = new TimelineMax();
coming.addLabel("img")
.from(".coming-soon__image__mainImage", 0.7, {yPercent:50, opacity:0},"img")
.from(".big-circle", 0.7, {scale:0.2,opacity:0},"img")
.from(".small-circle", 1.5, {scale:0.2,opacity:0})
.addLabel("show")
.from(".tall-top-line",0.5,{y:100,opacity:0},"show")
.from(".tall-botton-line",0.5,{y:100,opacity:0},"show")
.from(".short-top-line",0.5,{y:100,opacity:0},"show+1")
.from(".short-botton-line",0.5,{y:100,opacity:0},"show+1")
.addLabel("both")
.to(path11, 0.2, {attr:{"stroke-dashoffset": 0},opacity:1},"both")
.to(path22, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both")
.to(path33, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both")
.to(path44, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both");
