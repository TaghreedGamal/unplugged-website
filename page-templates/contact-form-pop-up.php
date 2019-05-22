<div class="contact-form small reveal" id="contact-form-modal" data-reveal>
  <!-- <div class="pipedriveWebForms" data-pd-webforms="https://pipedrivewebforms.com/form/0a564be458cd460cdf4c1240b036f580400659"><script src="https://cdn.pipedriveassets.com/web-form-assets/webforms.min.js"></script></div> -->
  <img  class="contact-form-image" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/products/form-image-cropped.png" alt="">
  <h1 class="form-title">Get In Touch.</h1>
  <?php echo do_shortcode('[gravityform id="8" title ="false" ajax="true"]');?>
  <button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
</button>
</div>
