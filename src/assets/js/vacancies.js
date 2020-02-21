// jQuery(document).ready( function($) {
//     if($('.loadmorehidden').children()[0]==undefined){
//         $(".vacancies-page-container .load-more").remove();
//         // $("#search-results .load-more").remove();

//     }
//   var ppp = 3; // Post per page
//   var pageNumber = 1;

// function load_posts(){
//   pageNumber++;
//   var str =  '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
//   // console.log($('.loadmorehidden').children()[0])
//   if($('.loadmorehidden').children()[0]!=undefined){
//   $.ajax({
//       type: "POST",
//       dataType: "html",
//       url: $('.loadmorehidden').children()[0].href,
//       data: str,
//       success: function(data){
//           var $data = $(data);
//           if($data.length){
//             let new_load_more_hidden_button = $data.find('.vacancies-page-container .loadmorehidden');
//             // let new_load_more_button = $data.find('.articles-container .load-more');
//             let articles = $data.find('.vacancies-page-container .vacancy');

//               $('.vacancies-page-container .loadmorehidden').remove();
//               // let new_load_more_button=   $(".articles-container .load-more").clone();
//               // $(".articles-container .load-more").remove();

//               $(".vacancies-page-container").append(articles);

//               $('.vacancies-page-container').append(new_load_more_hidden_button);
//                 if($('.vacancies-page-container .loadmorehidden').children()[0]!=undefined){
//               // $(".latest").append($(".articles-container .load-more"));
//             }
//             else{
//               $(".vacancies-page-container .load-more").remove();
//             //   $("#search-results .load-more").remove();

//             }

//               $(".load-more").attr("disabled",false);
//           } else{
//               $(".load-more").attr("disabled",true);
//           }
//       },
//       error : function(jqXHR, textStatus, errorThrown) {
//           $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
//       }

//   });
//   return false;
// }
// }

//     $(".load-more").on("click",function(){ // When btn is pressed.
//       if($('.loadmorehidden').children()[0]!=undefined){
//       // console.log($('.loadmorehidden').children()[0])
//       $(".load-more").attr("disabled",true); // Disable the button, temp.
//       // alert('clicked')
//       load_posts();
//     }

//     });

// });





$(document).ready(function() {
    let events = $('.vacancies .vacancy');
    for(let i = 0; i<events.length; i+=2)
    {
      let event1 = events[i];
      if(i+1<events.length){
      let event2 = events[i+1];
      $('.vacancies').append("<div class='two-events-grouped group" + i + "'>"+ event1.outerHTML + event2.outerHTML + "</div>")
  
    }else
      $('.vacancies').append("<div class='two-events-grouped group"+i+"'>"+event1.outerHTML+"</div>")
    }
    $('.vacancies .two-events-grouped:not(:first)').css('display','none')

    if($('.vacancies .two-events-grouped').length > 1){
    $('.vacancies').append("<a class='load-more-button button' href='#'>Load More</a>")
    }
  
  function updategroups()
  {
    let groups = $('.vacancies .two-events-grouped');
    let foundAHidden = false;
    for(let i  = 0 ;i<groups.length; i++)
    {
      let group = groups[i];
      console.log(group.style.display)
  
      if(group.style.display=='none')
      {
        foundAHidden = true;
              break;
      }
    }
    if(foundAHidden == false)
    {
      $('.vacancies .load-more-button').remove();
    }
  }
  
    $('.vacancies .load-more-button').click(function(event){
      event.preventDefault();
      let groups = $('.vacancies .two-events-grouped');
      for(let i  = 0 ;i<groups.length; i++)
      {
        let group = groups[i];
        if(group.style.display=='none')
        {
          group.style.display = 'block';
          updategroups();
          break;
        }
      }
    })
  });