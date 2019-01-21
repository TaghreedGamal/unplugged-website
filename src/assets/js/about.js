if($(".page-template-about-us").length != 0){
var line1 = $(".bottomZigzag-1 path"),
    length1 = line1[0].getTotalLength();
var line2 = $(".bottomZigzag-2 path"),
    length2 = line2[0].getTotalLength();

var l = new TimelineMax();
l.set(line1, {attr:{"stroke-dasharray": length1, "stroke-dashoffset": length1}})
.set(line2, {attr:{"stroke-dasharray": length2, "stroke-dashoffset": length2}});

var h = new TimelineLite();
h.addLabel("t")
.to(".about-us__title", 1, {y:-20,overflowY:'visible'},"t+=0.2")
.to(".about-us__header__title1", 1, {overflowY:'visible'},"t+=0.5")
.to(".about-us__header__title2", 1, {overflowY:'visible'},"t+=0.6")
.from(".top-img,.bottom-img", 0.7, {yPercent:50, opacity:0})
.from(".topCircle,.bottomCircle", 1.5, {scale:0.2,opacity:0})
.from(".topSCircle,.bottomSCircle", 1.5, {scale:0.2,opacity:0})
.addLabel("both")
.from(".topL1,.topL2,.topL11,.topL21",0.5,{y:100,opacity:0},"both")
.to(line1, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both")
.to(line2, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both")

}