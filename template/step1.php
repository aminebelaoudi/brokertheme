<div class="step1-wrapper">
    <div class="cs-header-v23">
        <div class="tit_eval_resul valeur2">        
            <?php if (!empty($logo_personnalise)) {            
                echo $logo_personnalise;
            } else {
                echo '<img src="/wp-content/uploads/2023/03/Info-Immobilier_logo.png" alt="Logo" class="cs-logo">';
            } ?>
            <h1>
                <?php if (!empty($titre_1)) {
                    echo $titre_1;
                } else {
                    echo "Obtenez la valeur marchande<br/>de votre propriété";
                } ?>
            </h1>
        </div>
    </div>

    <div class="container step1">
        <div class="cs-subtitle">
            <?php if (!empty($texte_1)) {
                echo strip_tags($texte_1);
            } else {
                echo "Recevez gratuitement et sans engagement l'évaluation de votre propriété, incluant les comparables vendus et en cours dans votre secteur.";
            } ?>
        </div>

        <div class="row">
            <div class="col-md-12 cs-steps">
                <div class="col-md-4 col-xs-4 one-step active">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <h3><?php echo !empty($etaps1) ? $etaps1 : 'Étape 1: Trouvez votre propriété'; ?></h3>
                </div>
                <div class="col-md-4 col-xs-4 one-step">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h3><?php echo !empty($etaps2) ? $etaps2 : 'Étape 2: Détails de la propriété'; ?></h3>
                </div>
                <div class="col-md-4 col-xs-4 one-step">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <h3><?php echo !empty($etaps3) ? $etaps3 : 'Étape 3: Obtenir le rapport'; ?></h3>
                </div>
            </div>
        </div>

        <div class="search-section">
            <form action="" method="post" id="msform">
                <div id="locationField" class="cs-form-field">
                    <input id="autocomplete" placeholder="<?php echo !empty($label_adresse) ? $label_adresse : 'Entrez l\'adresse de votre propriété'; ?>" onFocus="geolocate()" type="text" name="<?php echo ($is_mailchimp) ? 'mc4wp-ADDRESS' : 'address'; ?>" class="addresses" required />
                    <input type="text" name="unite" class="unite" placeholder="<?php echo !empty($label_unite) ? $label_unite : 'Numéro d\'unité (optionnel)'; ?>" />
                    
                    <div class="loading hidden">
                        <i class='fa fa-spinner fa-spin'></i>
                    </div>
                    <button type="submit" id="step1-next" name="next" class="btn btn-danger next cs-button-submit" value="Trouver"><?php echo !empty($label_button_1) ? $label_button_1 : 'Rechercher'; ?></button>
                </div>
            </form>
        </div>

        <div class="cs-footer-v23">
            <div class="">
                <?php require "testimonial.php"; ?>
            </div>
        </div>
    </div>
</div>
