<style>
    @media screen and (max-width:767px) {
        .testi1 {

            top: -150px !important;
            position: relative !important;
        }
    }

    .testi1 {

        top: -150px !important;
        position: relative !important;
    }
</style>


<div class="cs-header-v23 cs-header-step2">
    <div class="col-md-12 ">
        <div class="tit_eval_resul set2">
        <?php if (!empty($logo_personnalise)) {            
            echo $logo_personnalise;
        } else {
            echo '<img src="/wp-content/uploads/2023/03/Info-Immobilier_logo.png" alt="Logo" class="cs-logo">';
        } ?>
            <h1><?php echo $titre_2; ?></h1>
        </div>
    </div>
</div>

<div class="container step2">

    <div class="row topdd">
        <div class="col-md-12 cs-steps">
            <div class="col-md-4 col-xs-4 one-step cs-completed">
                <i class="fa fa-check" aria-hidden="true"></i>
                <h3 class="statuss"><?php echo $etaps1; ?></h3>
            </div>
            <div class="col-md-4 col-xs-4 one-step active">
                <i class="fa fa-home" aria-hidden="true"></i>
                <h3><?php echo $etaps2; ?></h3>
            </div>
            <div class="col-md-4 col-xs-4 one-step">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                <h3><?php echo $etaps3; ?></h3>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="col-md-5 no-padding">
                <div id="map"></div>
            </div>

            <?php
            if (get_post_meta($post->ID, 'formID', true)) {
                $formID = get_post_meta($post->ID, 'formID', true);
            } else {
                $args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
                $cf7Forms = get_posts($args);
                $formID = $cf7Forms[0]->ID;
            }

            ?>

            <div class="col-md-7 no-mobile-padding forny">
                <h3 class="cs-white-text"><?php echo $sous_titre_2; ?></h3>
                <br />
                <input type="hidden" name="unite" value="<?php echo (isset($_POST['unite'])) ? $_POST['unite'] : '';  ?>" />

                <?php echo do_shortcode('[contact-form-7 id=' . $formID . ' title="Formulaire de contact 1" html_id="msform"]'); ?>
                <p class="cs-white-text policy-privacy" style="margin-top: -30px;">
                    <span class="policy-icon">
                        <img src="https://test2.evaluationpropriete.ca/wp-content/uploads/sites/89/2025/11/protection.png" alt="Icône de sécurité" />
                    </span>
                    <span class="policy-text"><?php echo $politique_2; ?></span>
                </p>
            </div>
        </div>
        <div class="cs-footer-v23">
            <div class="testimonials-container">
                <?php require "testimonial.php"; ?>
            </div>
        </div>
    </div>
</div>

<?php
// Afficher la section Guide APRÈS la section Step1 (en dehors de la .container/.row pour éviter l'imbrication Bootstrap)
$guide_heading_level = 'h2';
$guide_right_content_html = '';
$guide_block_path = get_template_directory() . '/template/parts/guide-block.php';
if (file_exists($guide_block_path)) {
    require $guide_block_path;
}
?>

<script>
jQuery(document).ready(function() {
  jQuery("input[type='tel']").on("focus", function() {
    jQuery(this).unmask();
    jQuery(this).next(".error-message").remove(); // remove error message when field is focused
  });

  jQuery("input[type='tel']").on("keypress", function(e) {
    var inputVal = jQuery(this).val();
    var cleanedVal = inputVal.replace(/\D/g, '');
    
    if (cleanedVal.length >= 12) {
      e.preventDefault();
    }
  });

  jQuery("input[type='tel']").on("focusout", function() {
    var inputVal = jQuery(this).val();
    var cleanedVal = inputVal.replace(/\D/g, '');

    if (cleanedVal.length < 10) {
      // If less than 10 digits, display an error message
      jQuery(this).after('<span class="error-message" style="color:red;">Veuillez entrer au moins 10 chiffres.</span>');
    } else if (cleanedVal.length >= 11) {
      jQuery(this).mask('+0 (000) 000-0000');
    } else {
      jQuery(this).mask('(000) 000-0000');
    }
  });
});
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