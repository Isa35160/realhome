<?php /* Template Name: Gabarit contact */ ?>


<?php get_header(); ?>

<?php while (have_posts()): the_post() ; ?>


    <div class="container">
              <h2 class="contact_title">Contact</h2>
              
              <div class="contact_map"><img src="realhome/images/map.png" alt=""></div>

        <?php the_content(); ?>

    </div>
<?php endwhile ; ?>
<?php get_footer(); ?><?php