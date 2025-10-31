<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
    }

    .step1-wrapper {
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/images/background-property.jpg') center/cover no-repeat;
        background-size: cover;
        background-position: center;
        padding: 40px 20px;
    }

    .cs-header-v23 {
        text-align: center;
        margin-bottom: 60px;
        padding-top: 20px;
    }

    .cs-header-v23 .cs-logo {
        max-width: 250px;
        height: auto;
        margin-bottom: 30px;
    }

    .cs-header-v23 h1 {
        color: #ffffff;
        font-size: 48px;
        font-weight: 700;
        margin: 0;
        line-height: 1.3;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .container.step1 {
        max-width: 1200px;
        margin: 0 auto;
    }

    .cs-subtitle {
        text-align: center;
        color: #ffffff;
        font-size: 18px;
        margin-bottom: 50px;
        line-height: 1.6;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /* Steps Design */
    .cs-steps {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 60px;
        padding: 0 !important;
    }

    .one-step {
        background: rgba(52, 152, 219, 0.9);
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        transition: all 0.3s ease;
        min-height: 180px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .one-step.active {
        background: rgba(52, 152, 219, 1);
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
    }

    .one-step i {
        font-size: 48px;
        color: #ffffff;
        margin-bottom: 15px;
    }

    .one-step h3 {
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        text-transform: none;
    }

    /* Search Section */
    .search-section {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 50px;
        max-width: 900px;
        margin: 0 auto 50px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    #locationField {
        position: relative;
        margin-bottom: 0;
    }

    #locationField input#autocomplete {
        width: 100%;
        padding: 20px 25px;
        font-size: 18px;
        border: 2px solid #e0e0e0;
        border-radius: 50px;
        outline: none;
        transition: all 0.3s ease;
        background: #ffffff;
        margin-bottom: 15px;
    }

    #locationField input#autocomplete:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }

    #locationField .unite {
        width: 100%;
        padding: 15px 25px;
        font-size: 16px;
        border: 2px solid #e0e0e0;
        border-radius: 50px;
        outline: none;
        transition: all 0.3s ease;
        margin-bottom: 25px;
    }

    #locationField .unite:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }

    .cs-button-submit {
        width: 100%;
        padding: 18px 50px !important;
        border-radius: 50px !important;
        background: #3498db !important;
        border: none !important;
        font-size: 18px !important;
        font-weight: 600 !important;
        color: #ffffff !important;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .cs-button-submit:hover {
        background: #2980b9 !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
    }

    .loading {
        text-align: center;
        color: #3498db;
        font-size: 24px;
        margin: 20px 0;
    }

    .loading.hidden {
        display: none;
    }

    .cs-white-text {
        display: none;
    }

    .cs-footer-v23 {
        margin-top: 50px;
    }

    @media screen and (min-width:768px) {
        .hide_on_desktop {
            display: none;
        }
    }

    @media screen and (max-width:767px) {
        .hide_on_mobile {
            display: none;
        }

        .cs-header-v23 h1 {
            font-size: 32px;
        }

        .cs-steps {
            flex-direction: column;
            gap: 15px;
        }

        .one-step {
            width: 100%;
            min-height: auto;
            padding: 20px;
        }

        .one-step i {
            font-size: 36px;
        }

        .one-step h3 {
            font-size: 14px;
        }

        .search-section {
            padding: 30px 20px;
        }

        #locationField input#autocomplete {
            font-size: 16px;
            padding: 15px 20px;
        }

        .cs-button-submit {
            font-size: 16px !important;
            padding: 15px 40px !important;
        }

        .testi2 {
            top: 79px !important;
            position: relative !important;
        }

        .testi1 {
            position: relative !important;
        }
    }

    @media (max-width: 1024px) {
        .cs-steps {
            flex-wrap: wrap;
        }

        .one-step {
            flex: 1 1 calc(33.333% - 20px);
            min-width: 200px;
        }
    }
</style>

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
                echo "Obtenez la valeur marchande<br/>de votre propriété!";
            } ?></h1>
    </div>
</div>

<div class="container vvvv step1">

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

                                                        echo "<strong>Recevez un rapport d’évaluation de votre propriété!<br/>
Comprenant les comparables vendus et en vigueurs dans votre secteur.</strong><br><br><span style='font-weight: 400'>Sans frais et sans engagements de votre part.</span>";
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
            <div class="">
                <?php require "testimonial.php"; ?>
            </div>
        </div>
    </div>
</div>