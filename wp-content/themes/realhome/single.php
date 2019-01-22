<?php get_header(); ?>


        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>


            <?php endwhile; ?>
        <?php else :

            ?>


        <?php endif; ?>

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : ?>
<?php endif; ?>


<?php get_footer(); ?>
