   <?php
/**
 * The template for displaying All pages
 *
 * This is the template that displays the home by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage solde2main
 * @since EmpowerProWeb 1.0
 */
get_header(); 
global $post;
$titre1 = get_post_meta($post->ID, 'titre1', true );
$titre2 = get_post_meta($post->ID, 'titre2', true );
// Check if the custom field has a value.
?>
		
<?php if(is_front_page()) {
    if(!isset($_POST["next"]) && !isset($_POST['message'])) {
        require_once "template/step1.php";
    }elseif(isset($_POST["next"])) {
        require_once "template/step2.php";
    }
    
}elseif(is_page(10)) {
    require_once "template/step3.php";
}elseif(is_page(13)) {
  if(!isset($_POST["next"]) && !isset($_POST['message'])) {
        require_once "template/step1.php";
    }elseif(isset($_POST["next"])) {
        require_once "template/step2.php";
    }
}elseif(is_page(15)) {
    require_once "template/step3.php";
} elseif ($post->post_name == "merci") {
    require_once "template/step3.php";
}
?>

	<?php get_footer(); ?>