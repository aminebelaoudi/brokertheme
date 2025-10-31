<div class="cs-header-v23">
    <div class="col-md-12 ">
        <div class="tit_eval_resul set2">
            <?php if (!empty($logo_personnalise)) {            
                echo $logo_personnalise;
            } else {
                echo '<img src="<img src="/wp-content/uploads/2023/03/Info-Immobilier_logo.png" alt="Logo" class="cs-logo">';
            } ?>
            <h1>
                <?php echo $titre_3; ?>
            </h1>
        </div>
    </div>
</div>

<div class=" container">
    <div class="row topdd cs-step3">
        <div class="col-md-12 cs-steps">
            <div class="col-md-4 col-xs-4 one-step cs-completed">
                <i class="fa fa-check" aria-hidden="true"></i>
                <h3 class="statuss"><?php echo $etaps1; ?></h3>
            </div>
            <div class="col-md-4 col-xs-4 one-step cs-completed">
                <i class="fa fa-check" aria-hidden="true"></i>
                <h3><?php echo $etaps2; ?></h3>
            </div>
            <div class="col-md-4 col-xs-4 one-step active">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                <h3><?php echo $etaps3; ?></h3>
            </div>
        </div>
        <div class="tit_eval_resul set2">
            <h3 class="cs-white-text"><?php echo $texte_3; ?></h3>
            <?php if (isset($_SESSION['email'])) { ?>
                <br />
                <p class="cs-white-text"><?php echo $label_courriel ?> : <b class="red"><?php echo $_SESSION['email'] ?></b><br /><?php echo $label_telephone ?> : <b class="red"><?php echo $_SESSION['telephone'] ?></b> </p>
                <p class="cs-white-text"><?php echo $pas_bon_courriel; ?></p>
                <button type="submit" onclick="location.href='/'" name="next" class="red h2-white-text btn btn-danger btn-step-3 next" value="<?php echo $label_button_3 ?>"><?php echo $label_button_3 ?></button>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php
