<?php get_header(); ?>
<div class="container">

          <h1 class="actualite_main_title"><?php the_title(); ?></h1>
          <div class="actualite_single">


<?php if (have_posts()): ?>
    <?php while (have_posts()) :
    the_post(); ?>

    <?php add_filter( 'the_content', 'insert_featured_image', 20 );

        function insert_featured_image( $content ) {

            $content = preg_replace( "/<\/p>/", "</p>" . get_the_post_thumbnail($post->ID, 'post-single'), $content, 1 );
            return $content;
        } ; ?>

          <div class="actualite">
                    <section class="actualite_infos">
                        <?php the_content(); ?>
                              <p class="actualite_date_auteur"><?php the_time('d M Y'); ?>   /   PAR <span style="text-transform:uppercase; color: #e2574c"><?php echo $fname = get_the_author_meta('first_name'); ?> <?php echo $lname = get_the_author_meta('last_name'); ;?></span></p>

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