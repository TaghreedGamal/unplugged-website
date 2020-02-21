// $('.apply-page-container .apply-form-container form .gfield_description').prepend($('#field_10_7 .gfield_label'));
// $('.apply-page-container .apply-form-container form .gfield_description').prepend($('.apply-page-container .add'));

// console.log($('.apply-page-container .apply-form-container form .gfield_description'))
// console.log($('.add'))


$('.apply-page-container ').on('click', function(){
    let job_name = $(this).attr('data-title');
    $("#job-modal .side-image .job-name span")[0].innerText = job_name;

    // console.log( $('#job-modal .gform_wrapper input.gform_hidden'))
    if( $('#job-modal .gform_wrapper input.gform_hidden')[2]!=undefined){
    $('#job-modal .gform_wrapper input.gform_hidden')[2].value = job_name;
    }
})


jQuery(document).on('gform_post_render', function(event, form_id, current_page){
 
    if(form_id==10){
    if($('.ginput_container_fileupload')[0] != undefined){
        $('.ginput_container_fileupload').prepend("<label for='input_10_7' class='instructions'><div class='add'><span>+</span></div><p>Upload CV - Word or PDF documents only</p></label>");
        }
    }
    if(form_id==9){
        if($('.ginput_container_fileupload')[0] != undefined){
            $('.ginput_container_fileupload').prepend("<label for='input_9_7' class='instructions'><div class='add'><span>+</span></div><p>Upload CV - Word or PDF documents only</p></label>");
            }
        }

        if($('.apply-page-container .job')[0] !=undefined){
        let job_name = $('.apply-page-container .job')[0].innerText;
        // $("#job-modal .side-image .job-name span")[0].innerText = job_name;
        // console.log(job_name)
        // console.log( $('.apply-page-container .gform_wrapper input.gform_hidden')[0])
        if( $('.apply-page-container .gform_wrapper input.gform_hidden')[0]!=undefined){
        $('.apply-page-container .gform_wrapper input.gform_hidden')[0].value = job_name;
        }
    }

});

if($('#input_10_7')[0] !=undefined){
    document.getElementById('input_10_7').onchange = function () {
        $('.ginput_container_fileupload .instructions p')[0].innerText = this.value.replace(/.*[\/\\]/, '');;
      };
    }

    if($('#input_9_7')[0] !=undefined){
        document.getElementById('input_9_7').onchange = function () {
            $('.ginput_container_fileupload .instructions p')[0].innerText = this.value.replace(/.*[\/\\]/, '');;
          };
        }