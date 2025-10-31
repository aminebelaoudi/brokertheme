<?php
$args = array(
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$testimonials = get_posts($args);

?>
<?php
$url = home_url();
?>

<div class="col-md-12 slideshow-container">
    <div id="slideshow" class=" no-mobile-padding">


        <?php
        if (count($testimonials)) {
            foreach ($testimonials as $testimony) :

                $stars = 5;
                $quand = get_post_meta($testimony->ID, 'quand', true) != '' ? get_post_meta($testimony->ID, 'quand', true) : get_the_excerpt($testimony->ID);
                $logo = '';

                // Use Facebook logo for testimonials with odd IDs, Google logo for even IDs
                if ($testimony->ID % 2 == 0) {
                    $logo = '/wp-content/uploads/2023/03/google-logo-small.png';
                } else {
                    $logo = '/wp-content/uploads/2023/03/Facebook_Logo-Small.png';
                }
        ?> 
                <div>
                    <div class="testimonial-container">
                        <span class="rightt">
                            <img src="<?php echo $logo; ?>" alt="<?php echo $testimony->post_title; ?>" title="<?php echo $testimony->post_title; ?>" />
                        </span>
                        <span class="leffr">
                            <p class="titre"><?php echo $testimony->post_title; ?></p>
                            <?php
                            for ($i = 0; $i < $stars; $i++) {
                            ?>
                                <i class="fa fa-star"></i>
                            <?php
                            }
                            ?>
                            <p class="pushtop"><?php echo strip_tags($testimony->post_content); ?></p>
                            <i><?php echo $quand; ?></i>
                        </span>
                    </div>
                </div>
            <?php
            endforeach;
        } else {        
            ?>

            <div style="">
                <div class="testimonial-container">
                    <span class="rightt">
                        <img src="<?php echo $url; ?>/wp-content/uploads/2023/03/Facebook_Logo-Small.png" alt="Guillaume Potvin" title="Guillaume Potvin">
                    </span>
                    <span class="leffr">
                        <p class="titre">Guillaume Potvin</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="pushtop">Très bonne analyse de la valeur de ma propriété qui m'a permis de prendre la bonne décision</p>
                        <i>hier</i>
                    </span>
                </div>
            </div>
            <div style="display: none;">
                <div class="testimonial-container">
                    <span class="rightt">
                        <img src="<?php echo $url; ?>/wp-content/uploads/2023/03/google-logo-small.png" alt="éric Daoust" title="éric Daoust">
                    </span>
                    <span class="leffr">
                        <p class="titre">éric Daoust</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="pushtop">Wow! Processus très efficace!</p>
                        <i>Il y'a 2 heures</i>
                    </span>
                </div>
            </div>
            <div style="display: none;">
                <div class="testimonial-container">
                    <span class="rightt">
                        <img src="<?php echo $url; ?>/wp-content/uploads/2023/03/Facebook_Logo-Small.png" alt="Audrey valiquette" title="Audrey valiquette">
                    </span>
                    <span class="leffr">
                        <p class="titre">Audrey valiquette</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="pushtop">Merci pour le service super service!</p>
                        <i>il y'a 16 heures</i>
                    </span>
                </div>
            </div>
            <div style="display: none;">
                <div class="testimonial-container">
                    <span class="rightt">
                        <img src="<?php echo $url; ?>/wp-content/uploads/2023/03/google-logo-small.png" alt="Georges Haddou" title="Georges Haddou">
                    </span>
                    <span class="leffr">
                        <p class="titre">Georges Haddou</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="pushtop">évaluation très professionnel, merci!</p>
                        <i>il y'a 2 jours</i>
                    </span>
                </div>
            </div>
            <div style="display: none;">
                <div class="testimonial-container">
                    <span class="rightt">
                        <img src="<?php echo $url; ?>/wp-content/uploads/2023/03/Facebook_Logo-Small.png" alt="Gilles Bellehumeur" title="Gilles Bellehumeur">
                    </span>
                    <span class="leffr">
                        <p class="titre">Gilles Bellehumeur</p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p class="pushtop">Super service Rapide et efficace!</p>
                        <i>il y'a 19 minutes</i>
                    </span>
                </div>
            </div>

        <?php
        }
        ?>




    </div>

</div>