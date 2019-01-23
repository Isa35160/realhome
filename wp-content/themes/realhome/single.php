<?php get_header(); ?>
<div class="container">

          <h1 class="actualite_main_title"><?php the_title(); ?></h1>
          <div class="actualite_single">


<?php if (have_posts()): ?>
    <?php while (have_posts()) :
    the_post(); ?>


          <div class="actualite">
          <img src="<?php the_post_thumbnail_url('full') ?> " alt="">
                    <section class="actualite_infos">
                              <p class="actualite_date"><?php the_time('d M Y'); ?></p>
                        <?php the_content(); ?>

                    </section>
              <?php comments_template(); ?>

          </div>
    <?php endwhile; ?>
<?php endif; ?>
                    <div class="gray_border"></div>
          <aside><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : ?>
              <?php endif; ?></aside>
          </div>
</div>
<?php get_footer(); ?>