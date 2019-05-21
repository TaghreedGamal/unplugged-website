import $ from 'jquery';
import {TweenMax, Power2, TimelineLite} from "gsap/TweenMax";
import whatInput from 'what-input';
import slick from "slick-carousel";
import projects from "./projects";
import products from "./products";
import blogs from "./blogs";
import comindSoon from "./comingSoon";
import about from "./about";
import careers from "./careers";
import team from "./team";


window.$ = $;

import Foundation from 'foundation-sites';
$(document).foundation();




///loader

// $("body").css('overflow-y', "hidden");
window.onload = function(){
  $('.website-loader').remove();
  $("body").css('overflow-y', "scroll");
  // setTimeout(function() {
  // $('#contact-form-modal').foundation('open');  }, 5000);


}
  $('#contact-form-modal').foundation('open');
///loader



let contactSteps = $(".step");
$('[data-click]').on('click',openContact)
function openContact() {

var x =  document.getElementById("demo");
    if (x.style.display == "none")
    {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

$('[next-click]').on('click',function(){
    var  $this = $(this),
        parent = $this.parents(".step"),
        index=contactSteps.index(parent);
        index = parseInt(index);
        parent.hide();
        contactSteps.eq(index+1).show();
})

$(".slider").slick({

    autoplay: false,
    dots: true,
    responsive: [{
        breakpoint: 500,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }]
});


$('[close-click]').on('click',function(){
    var x =  document.getElementById("demo1");
    x.style.display = "none";
})
$('[close1-click]').on('click',function(){
    var x =  document.getElementById("demo2");
    x.style.display = "none";
})
$('[close2-click]').on('click',function(){
    var x =  document.getElementById("demo");
    x.style.display = "none";
})

$('[menu-click]').on('click',function(){
 $(".full-menu").addClass("active");
 $('html, body').css('overflowY', 'hidden');
 $('.menu-logo').addClass('menu-logo-appear');
 $('.home-logo').css('zIndex','0');
})

$('[close-menu]').on('click',function(){
    $(".full-menu").removeClass("active");
    $('html, body').css('overflowY', 'visible');
    $('.menu-logo').removeClass('menu-logo-appear');
    $('.home-logo').css('zIndex','1000');
})


if($(".home").length != 0){
    // console.log("home");

$(document).ready(function(){
  $('.home-slider__responsive__slides').slick({
    infinite: true,
     speed: 500,
     slidesToShow: 1,
     slidesToScroll: 1,
     autoplay:true,
     dots:true
  });
});

// responsive services
 $('.services-slider-titles').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      focusOnSelect: true,
      asNavFor: '.services-slider-content',
      responsive: [{
            breakpoint: 500,
            settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 6,
                slidesToScroll: 1
            }
        }]
});
$('.services-slider-content').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.services-slider-titles',
      responsive: [{
            breakpoint: 500,
            settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
});

/// partner slider
$(document).ready(function(){
$('.clients').slick({
  centerMode: true,
  centerPadding: '120px',
  slidesToShow: 4,
  autoplay:true,
  focusOnSelect: true,
  speed: 800,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 2
      }
    },
  ]
});

});


// responsive projects
$('.projects-slider-logos').slick({
      slidesToShow: 8,
      slidesToScroll: 1,
      focusOnSelect: true,
      asNavFor: '.projects-slider-content',
      responsive: [
            {
                breakpoint: 500,
                settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1
                }
            }
        ]
});
$('.projects-slider-content').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.projects-slider-logos',
      responsive: [{
            breakpoint: 500,
            settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
});
// slide animation

var path2 = $(".fun3 path"),
    length2 = path2[0].getTotalLength();
var path3 = $(".fun4 path"),
    length3 = path3[0].getTotalLength();

var path5 = $(".flex6 path"),
    length5 = path5[0].getTotalLength();
var path6 = $(".flex0 path"),
    length6 = path6[0].getTotalLength();

var path8 = $(".inv9 path"),
    length8 = path8[0].getTotalLength();
var path9 = $(".inv0 path"),
    length9 = path9[0].getTotalLength();
var path10 = $(".fun11 path"),
    length10 = path10[0].getTotalLength();
var path11 = $(".fun12 path"),
    length11 = path11[0].getTotalLength();

var tl = new TimelineMax();
tl.set(path2, {attr:{"stroke-dasharray": length2, "stroke-dashoffset": length2}})
.set(path3, {attr:{"stroke-dasharray": length3, "stroke-dashoffset": length3}})
.set(path5, {attr:{"stroke-dasharray": length5, "stroke-dashoffset": length5}})
.set(path6, {attr:{"stroke-dasharray": length6, "stroke-dashoffset": length6}})
.set(path8, {attr:{"stroke-dasharray": length8, "stroke-dashoffset": length8}})
.set(path9, {attr:{"stroke-dasharray": length9, "stroke-dashoffset": length9}})
.set(path10, {attr:{"stroke-dasharray": length10, "stroke-dashoffset": length10}})
.set(path11, {attr:{"stroke-dasharray": length11, "stroke-dashoffset": length11}});

var tl1 = new TimelineLite({onComplete:function() {
    this.restart();}
});

tl1.to('.dot1', 0.5, {backgroundColor:"#003a47",width:60})
.addLabel("t")
.to(".hi1", 1, {y:-50,overflowY:'visible'},"t+=0.2")
.to(".Stitle1", 1, {overflowY:'visible'},"t+=0.5")
.to(".Stitle4", 1, {overflowY:'visible'},"t+=0.6")
.to("#Slidfun", 0.6, {opacity:1})
.from(".fadeInUp", 0.7, {yPercent:50, opacity:0})
.from(".zoom", 1.5, {scale:0.2,opacity:0})
.addLabel("both")
.to(path2, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both")
.to(path3, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both")
.from(".bouncess",0.5, {y:-50,scale:0.9,opacity:0})
.addLabel("both3")
.from(".show1",0.5,{y:100,opacity:0},"both3")
.from(".show2",0.5,{y:100,opacity:0},"both3+=0.1")
.to(path10, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both3")
.to(path11, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both3+=0.1")

.addLabel("fly",'+=1')
.to(".bouncess",0.5, {y:-50,opacity:0},"fly")
.to(path2, 0.2, {y:-100,opacity:0},"fly+=0.1")
.to(path3, 0.2, {y:-100,opacity:0},"fly+=0.2")
.to(path10, 0.2, {y:-100,opacity:0},"fly+=0.3")
.to(path11, 0.2, {y:-100,opacity:0},"fly+=0.4")
.to(".show1", 0.2, {y:-100,opacity:0},"fly+=0.5")
.to(".show2", 0.2, {y:-100,opacity:0},"fly+=0.6")
.to(".zoom", 0.8, {yPercent:-100,opacity:0},"fly+=0.7")
.to(".fadeInUp", 0.7, {yPercent:-100, opacity:0},"fly+=0.8")
.to('.dot1', 0.5, {backgroundColor:"#a9a9a9",width:40},"fly+=1")


.to('.dot2', 0.5, {backgroundColor:"#003a47",width:60})
.to("#Slidflex", 0.8, {opacity:1,delay:0.2})
.from(".fadeInUp2", 0.7, {yPercent:50, opacity:0})
.from(".zoom2", 1.5, {scale:0.2,opacity:0})
.addLabel("both2")
.to(path5, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both2")
.to(path6, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both2")
.from(".bouncess2",0.5, {x:-10,scale:0.9,opacity:0})
.addLabel("both4")
.from(".show11",0.5,{y:100,opacity:0},"both4")
.from(".show22",0.5,{y:100,opacity:0},"both4+=0.1")

.addLabel("fly1", '+=1')
.to(".bouncess2",0.5, {x:-10,scale:1,opacity:0},"fly1")
.to(path5, 0.2, {y:-100,opacity:0},"fly1+=0.1")
.to(path6, 0.2, {y:-100,opacity:0},"fly1+=0.2")
.to(".show11", 0.2, {y:-100,opacity:0},"fly1+=0.3")
.to(".show22", 0.2, {y:-100,opacity:0},"fly1+=0.4")
.to(".zoom2", 0.8, {yPercent:-100,opacity:0},"fly1+=0.5")
.to(".fadeInUp2", 0.7, {yPercent:-100, opacity:0},"fly1+=0.6")
.to('.dot2', 0.5, {backgroundColor:"#a9a9a9",width:40},"fly1+=0.8")


.to('.dot3', 0.5, {backgroundColor:"#003a47",width:60})
.to("#Slidinv", 0.8, {opacity:1,delay:0.2})
.from(".fadeInUp3", 0.7, {yPercent:50, opacity:0})
.from(".zoom3", 1.5, {scale:0.2,opacity:0})
.addLabel("both3")
.to(path8, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both3")
.to(path9, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"both3")
.from(".bouncess3",0.5, {x:50,scale:0.9,opacity:0})
.addLabel("both5")
.from(".show111",0.5,{y:100,opacity:0},"both5")
.from(".show222",0.5,{y:100,opacity:0},"both5+=0.1")

.addLabel("fly2", '+=1')
.to(".bouncess3",0.5, {x:50,scale:1,opacity:0},"fly2")
.to(path8, 0.2, {y:-100,opacity:0},"fly2+=0.1")
.to(path9, 0.2, {y:-100,opacity:0},"fly2+=0.2")
.to(".show111", 0.2, {y:-100,opacity:0},"fly2+=0.3")
.to(".show222", 0.2, {y:-100,opacity:0},"fly2+=0.4")
.to(".zoom3", 0.8, {yPercent:-100,opacity:0},"fly2+=0.5")
.to(".fadeInUp3", 0.7, {yPercent:-100, opacity:0},"fly2+=0.6")
.to('.dot3', 0.5, {backgroundColor:"#a9a9a9",width:40},"fly2+=0.8");


//project section

var Bottomslider=$(".project-section").offset().top;
$(window).scroll(function() {
     if($(window).scrollTop()*8 > Bottomslider )
        {
          tl1.pause();
        }
    else{
        tl1.play();
    }
 });

// services animation
var servicesTimelines ={};

$('#example-tabs').on('change.zf.tabs', function() {
    var activeTab = $(".tabs-panel.is-active");
if ( activeTab.length ) {
    var service = activeTab.data("service"),
        box = activeTab.find(".box"),
        title = activeTab.find(".box__title"),
        text = activeTab.find(".box__text"),
        button = activeTab.find(".box .button"),
        img = activeTab.find(".serv-img"),
        circle=activeTab.find(".serv-cir"),
        shape=activeTab.find(".serv-shape"),
        screen=activeTab.find(".serv-screen"),
        lines=activeTab.find(".serv-line"),
        draw=activeTab.find(".serv-draw");
    if(servicesTimelines[service]){
        servicesTimelines[service].restart();
    }else{
       // console.log("img",img);
    servicesTimelines[service] = new TimelineMax();
    servicesTimelines[service]
    .addLabel("with")
    .from(title,0.3,{x:-100,opacity:0},"with")
    .from(text,0.3,{x:-100,opacity:0},"with+=0.1")
    .from(button,0.3,{x:-100,opacity:0},"with+=0.2")
    .from(img,0.4,{x:-500,opacity:0},"with+=0.4")
    .from(circle, 0.7, {scale:0.2,opacity:0},"with+=0.6")
    .from(shape,0.4,{x:-200,opacity:0},"with+=0.7")
    .from(screen,0.4,{x:200,opacity:0},"with+=0.7")
    .from(lines,0.5,{y:200,opacity:0},"with+=1")
    .from(draw,0.5,{x:-100,opacity:0},"with+=1");
    }
}
//    from(box,0.6,{x:-900,opacity:0}) box transform
});


////// project animation
var screenSize=$(window).width();
if (screenSize > '480'){
    var projectTimelines ={};
    $('#collapsing-tabs').on('change.zf.tabs', function() {
        var activeTab2 = $('.projtabs').find('.is-active');
    if ( activeTab2.length ) {
        var project = activeTab2.id ,
            container=activeTab2.find(".contain-box"),
            box1 = activeTab2.find(".box"),
            img1 = activeTab2.find(".project-images__device-laptop"),
            img2 = activeTab2.find(".project-images__device-mobile");
        if(projectTimelines[container]){
            projectTimelines[container].restart();
        }else{
          projectTimelines[project] = new TimelineMax();
          projectTimelines[project].addLabel("go")
              .from(container,0.3,{scaleX:0,transformOrigin:"right"},"go")
              .from(box1,0.5,{x:10,opacity:0,scaleX:0,transformOrigin:"right"},"go+=0.2")
              .from(img1,0.6,{x:800,opacity:0})
              .from(img2,0.4,{scale:0.2,opacity:0});

        }
    }
    });
}

//// intern animation

var path01 = $("#imgl1 path"),
    length01 = path01[0].getTotalLength();
var path02 = $("#imgl2 path"),
    length02 = path02[0].getTotalLength();


var tl = new TimelineMax();
tl.set(path01, {attr:{"stroke-dasharray": length01, "stroke-dashoffset": length01}})
.set(path02, {attr:{"stroke-dasharray": length02, "stroke-dashoffset": length02}});

var inl = new TimelineMax();
            inl.from("#box1",0.5, {y:-150,opacity:0},1)
            .from("#box2",0.5, {y:-150,opacity:0},1)
            .from("#box1-img",0.6, {y:300,opacity:0},1)
            .from("#box2-img",0.6, {y:300,opacity:0},1)
            .addLabel("cir")
            .from(".circle", 1, {scale:0.2,opacity:0},"cir")
            .from(".circle2", 1, {scale:0.2,opacity:0},"cir")
            .addLabel("line")
            .from(".left-boxline",0.5,{y:200,opacity:0},"line")
            .from(".right-boxline2",0.5,{y:200,opacity:0},"line")
            .addLabel("sline")
            .from(".left-boximgline-1",0.5,{y:200,opacity:0},"sline")
            .from(".right-boximg2line-1",0.5,{y:200,opacity:0},"sline")
            .from(".left-boximgline-2",0.5,{y:200,opacity:0},"sline")
            .from(".right-boximg2line-2",0.5,{y:200,opacity:0},"sline")
            .addLabel("draw")
            .to(path01, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"draw")
            .to(path02, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"draw+=0.4");
inl.pause();

$(window).scroll(function() {
    var inter= $(".blog");
    var top_of_element = inter.offset().top + 200;
    var bottom_of_element = inter.offset().top + inter.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
          inl.play();
        }

 });


////////// cards animation

var card = new TimelineMax();
card.from(".datacard",0.4,{x:500,opacity:0})
.from(".kora",0.4, {scale:0.2,opacity:0})
.from(".cardl",0.4,{y:200,opacity:0})
.from(".obj",0.4,{x:200,opacity:0});
card.pause();
$(".card1, .card2, .card3, .card4").hover(
  function () {
    $(this).find(".card").addClass('cardhover');
    $(this).find(".obj").addClass('objhover');
    $(this).find(".datacard").addClass('dcardhover');
    $(this).find(".kora").addClass('dcardhover');
    $(this).find("p.card-no").addClass('cardno-hover');
  },function(){
    $(this).find(".card").removeClass('cardhover');
    $(this).find(".obj").removeClass('objhover');
    $(this).find(".datacard").removeClass('dcardhover');
    $(this).find(".kora").removeClass('dcardhover');
    $(this).find("p.card-no").removeClass('cardno-hover');

});
$(window).scroll(function() {
    var inter= $(".Cards__container");
    var top_of_element = inter.offset().top;
    var bottom_of_element = inter.offset().top + inter.outerHeight();
    var top_of_screen = $(window).scrollTop();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        card.play();
    }
 });

/////// video

// var screenSize=$(window).width();
// if (screenSize > '1024'){
//  var aud = document.getElementById("myvideo");
// $(window).scroll(function() {
//     var v= $(".products");
//     var top_of_element = v.offset().top;
//     var bottom_of_element = v.offset().top + v.outerHeight();
//     var top_of_screen = $(window).scrollTop();
//     var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
//     if((top_of_element < top_of_screen) && (top_of_screen < bottom_of_element)){
//         aud.play();
//         var video=new TimelineMax();
//         video.to(".video-R",0.3,{x:20,opacity:1},0.1)
//         .to(".video-L",0.3,{x:30,opacity:1},0.1)
//         .to(".v-line",0.3,{x:0,opacity:1})
//         .to(".v-line2",0.3,{x:0,opacity:1})
//         .to(".v-circle",0.6,{scale:1,opacity:1})
//         .to(".v-scircle",0.3,{scale:1,opacity:1})
//         .to(".v-lcircle",0.3,{scale:1,opacity:1});
//     }
//     else{
//         aud.pause();
//     }
//     // aud.onended = function() {
//     //     var video=new TimelineMax();
//     //     video.to(".video-R",0.3,{x:-30,opacity:1},0.1)
//     //     .to(".video-L",0.3,{x:30,opacity:1},0.1)
//     //     .to(".v-line",0.3,{x:0,opacity:1})
//     //     .to(".v-line2",0.3,{x:0,opacity:1})
//     //     .to(".v-circle",0.6,{scale:1,opacity:1})
//     //     .to(".v-scircle",0.3,{scale:1,opacity:1})
//     //     .to(".v-lcircle",0.3,{scale:1,opacity:1});
//     // };
//  });
// }

}
////////// footer
var path1 = $("#righl1 path"),
    length1 = path1[0].getTotalLength();
var path2 = $("#righl2 path"),
    length2 = path2[0].getTotalLength();
var path3 = $("#lefl1 path"),
    length3 = path3[0].getTotalLength();
var path4 = $("#lefl2 path"),
    length4 = path4[0].getTotalLength();
var tl = new TimelineMax();
tl.set(path1, {attr:{"stroke-dasharray": length1, "stroke-dashoffset": length1}})
.set(path2, {attr:{"stroke-dasharray": length2, "stroke-dashoffset": length2}})
.set(path3, {attr:{"stroke-dasharray": length3, "stroke-dashoffset": length3}})
.set(path4, {attr:{"stroke-dasharray": length4, "stroke-dashoffset": length4}});

var f=new TimelineMax();
f.from(".right",0.5,{y:150,opacity:0},1)
.from(".left",0.5,{y:-150,opacity:0},1)
.call(function() {
    $('.right').addClass("animate");
}, null, null, 1.5)
.call(function() {
    $('.left').addClass("animate");
}, null, null, 1.5)
.addLabel("draw","+=1")
.to(path1, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"draw")
.to(path2, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"draw+=0.4")
.to(path3, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"draw")
.to(path4, 0.6, {attr:{"stroke-dashoffset": 0},opacity:1},"draw+=0.4");
f.pause();
var Topfooter=$(".footer").offset().top;
$(window).scroll(function() {
//     if($(window).scrollTop() > Topfooter)
    if($(window).scrollTop() + $(window).height() > $(document).height() - 500)
        {
         f.play();
        }

 });



 var home_page_products_animation = new TimelineMax();
 home_page_products_animation.from(".products.container .product-media .product-left-image ", 1, {x:350, opacity: 0},1)
                             .from(".products.container .product-media .product-right-image ", 1, {x:-350, opacity: 0},1)
                             .from(".products.container .product-media .line ", 0.5, {x:-200, opacity: 0},3)
                             .from(".products.container .product-media .blue-line-1 ", 0.5, {y:300, opacity: 0},2)
                             .from(".products.container .product-media .blue-line-2 ", 1, {y:300, opacity:0},2)
                             .from(".products.container .product-media .circles ", 0.5, {scale:0, opacity:0},3)
                             .from(".products.container .product-media .orange-circle ", 0.5, {scale:0, opacity:0},3)



 home_page_products_animation.pause();

 $(window).scroll(function() {
   var products_container= $(".products.container");
   if(products_container.length!=0){
   var top_of_element = products_container.offset().top;
   var bottom_of_element = products_container.offset().top + products_container.outerHeight();
   var top_of_screen = $(window).scrollTop();
   var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
   if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
         home_page_products_animation.play();
       }
     }
 });
