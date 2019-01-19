<?php /* Template Name: Gabarit contact */ ?>


<?php get_header(); ?>

<?php $the_query = new WP_Query($args); ?>


    <h2 class="contact_title">Infos</h2>
    <div class="container">

        <?php the_content(); ?>

    </div>

<?php get_footer(); ?><?php