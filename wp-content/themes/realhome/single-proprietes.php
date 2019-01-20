<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

                    <h1 class="article_title"><?php the_title(); ?></h1>
                    <p class="article_date"><?php  the_time('d M Y'); ?></p>

                    <div class="container">
                        <?php the_content(); ?>

                    </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
<?php endif; ?>
          </div>

<?php get_footer(); ?>