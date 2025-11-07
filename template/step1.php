<style>
    @media screen and (min-width:768px) {
        .hide_on_desktop {
            display: none;
        }
    }


    @media screen and (max-width:767px) {
        .hide_on_mobile {
            display: none
        }

        #locationField {
            margin-bottom: 2px;
            position: relative !important;
        }

        .testi2 {

            top: 79px !important;
            position: relative !important;

        }

        .testi1 {

            position: relative !important;
        }

    }

    @media (max-width:1281px) {

        #locationField {
            margin-bottom: 2px;
            position: relative !important;
        }

        #slideshow {}
    }

    @media (min-width:1281px) {

        #locationField {
            margin-bottom: 2px;
            position: relative !important;
        }

        #slideshow {}
    }

    .cs-button-submit {
        padding: 10px 50px !important;
        border-radius: 50px !important;
    }
</style>

<div class="cs-header-v23">
    <div class="tit_eval_resul valeur2">        
        <?php if (!empty($logo_personnalise)) {            
            echo $logo_personnalise;
        } else {
            echo '<img src="logo-info v white.webp" alt="Logo" class="cs-logo">';
        } ?>
        <h1>
            <?php if (!empty($titre_1)) {
                echo $titre_1;
            } else {
                echo "Obtenez la valeur marchande <br> de votre propriété";
            } ?></h1>
    </div>
</div>

<div id="evaluation" class="container vvvv step1">

    <div class="row topdd">
        <div class="row">
            <div class="col-md-12 cs-steps">
                <div class="col-md-4 col-xs-4 one-step active">
                    <i class="fa fa-search statuss" aria-hidden="true"></i>
                    <h3 class="statuss"><?php echo $etaps1; ?></h3>
                </div>
                <div class="col-md-4 col-xs-4 one-step">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h3><?php echo $etaps2; ?></h3>
                </div>
                <div class="col-md-4 col-xs-4 one-step">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <h3><?php echo $etaps3; ?></h3>
                </div>
            </div>

        </div>
        <div class="col-md-12">

            <h2 class="cs-white-text text-center"><?php if (!empty($texte_1)) {
                                                        echo $texte_1;
                                                    } else {

                                                        echo "<strong>Recevez gratuitement et sans engagement l’évaluation de votre propriété, incluant les <br> comparables vendus et en cours dans votre secteur.</strong>";
                                                    } ?></h2>
        </div>

        <div class="col-md-12">
            <form action="" method="post" id="msform">
                <div id="locationField" class="cs-form-field">
                    <input id="autocomplete" placeholder="<?php echo $label_adresse; ?>" onFocus="geolocate()" type="text" name="<?php echo ($is_mailchimp) ? 'mc4wp-ADDRESS' : 'address'; ?>" class="addresses" required />
                    <input type="text" name="unite" class="unite" placeholder="<?php echo $label_unite; ?>" />

                    <br /><br />
                    <div class="loading hidden">
                        <i class='fa fa-spinner fa-spin'></i>
                    </div>
                    <button type="submit" id="step1-next" name="next" class="btn btn-danger next cs-button-submit" value="Trouver"><?php echo $label_button_1; ?></button>
                </div>
            </form>
        </div>
        <div class="cs-footer-v23">
            <div class="testimonial-bridge">
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