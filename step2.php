 <style>
   /* Set the size of the div element that contains the map */
   #map {
     height: 300px;
     /* The height is 400 pixels */
     width: 100%;
     /* The width is the width of the web page */
   }
 </style>
 <div class="container">
   <div class="row topdd2">
     <div class="tit_eval_resul set2">
       <h1><?php echo get_post_meta($post->ID, 'titre11', true); ?></h1>

     </div>
     <div class="col-md-10 col-md-offset-1">
       <div class="row">

         <div class="col-md-6">

           <div id="map"></div>
         </div>
         <div class="col-md-6 forny">
           <h3><?php echo get_post_meta($post->ID, 'titre12', true); ?></h3>
           <br />
           <?php echo do_shortcode('[contact-form-7 id="41" title="Formulaire de contact 1" html_id="msform"]'); ?>
         </div>
       </div>
     </div>
   </div>
   <div class="row steps">
     <div class="col-md-10 col-md-offset-1">
       <div class="row">
         <div class="col-md-4 col-xs-4">
           <i class="fa fa-search statuss" aria-hidden="true"></i>
           <h3 class="statuss"><?php echo get_post_meta($post->ID, 'Etape1', true); ?></h3>
         </div>
         <div class="col-md-4 col-xs-4">
           <i class="fa fa-home statuss" aria-hidden="true"></i>
           <h3 class="statuss"><?php echo get_post_meta($post->ID, 'Etape2', true); ?></h3>
         </div>
         <div class="col-md-4 col-xs-4">
           <i class="fa fa-list-alt" aria-hidden="true"></i>
           <h3><?php echo get_post_meta($post->ID, 'Etape3', true); ?></h3>
         </div>
       </div>
       <br />
     </div>
   </div>
 </div>
 ?>
 <?php
  require_once "testimonial.php";
  ?>
 <script>
   // Initialize and add the map
   function initMap() {
     // The location of Uluru
     var uluru = {
       lat: <?php echo $lat; ?>,
       lng: <?php echo $long; ?>
     };
     // The map, centered at Uluru
     var map = new google.maps.Map(
       document.getElementById('map'), {
         zoom: 18,
         center: uluru,
         mapTypeId: google.maps.MapTypeId.SATELLITE
       });
     // The marker, positioned at Uluru
     var marker = new google.maps.Marker({
       position: uluru,
       map: map,
       /* label: {
          color: 'white',
          fontWeight: 'bold',
          text: '<?php echo $address1; ?>',
        },*/
       icon: {
         size: new google.maps.Size(22, 40),
         origin: new google.maps.Point(0, 0),
         anchor: new google.maps.Point(11, 40),
         labelOrigin: new google.maps.Point(40, 33)
       },


     });
   }
 </script>
 <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
 <!-- PROD KEY AIzaSyAXhbCXalRIlmMJ3Kfxl9jtRzWZ_LJfrDc-->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo WP_ENV_GOOGLE_API_2 ?>&callback=initMap">
 </script>