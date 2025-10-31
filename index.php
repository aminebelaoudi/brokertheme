<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pc
 */


get_header();
?>


<?php
/* Start the Loop */
global $s;
$s = 1;


the_post();
$s = 0;
if (have_rows('blocs')) :

    // Loop through rows.
    while (have_rows('blocs')) : the_row();
        $s++;
        get_content_layout(get_row_layout(), $s);

    // End loop.
    endwhile;

endif; // End loop.


?>


<?php

get_footer();
