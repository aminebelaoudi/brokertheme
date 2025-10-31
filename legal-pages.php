<?php
/**
 * Template Name: Page Legales
 */

get_header(); ?>

<style>
    .politique-content {
        max-width: 800px;
        margin: 40px auto;
        padding: 50px 30px;
        background-color: #ffffff;
        line-height: 1.3em;
        font-size: 16px;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    }

    .politique-content h1, .politique-content h2, .politique-content h3 {
        margin-top: 24px;
        margin-bottom: 16px;
    }

    .politique-content p, .politique-content ul, .politique-content ol {
        margin-bottom: 16px;
    }

    .politique-content ul, .politique-content ol {
        padding-left: 20px;
    }
    
    .politique-content h1.title {
        font-size: 24px;
        font-weight: bold;
        margin-top: 0;
    }

</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="politique-content">
            <?php
            while ( have_posts() ) :
                the_post(); 
                echo '<h1 class="title">' . get_the_title() . '</h1>'; 
                the_content();
            endwhile;
            ?>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
