<?php get_header(); ?>
<?php
$page_title = get_the_title(get_option('page_for_posts', true)); ?>

<h1 class="actualites_main_title container">Nos <?php echo $page_title ?></h1>
<div class="actualites">
          <div class="">

              <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                                  <div class="actualite">
                                            <div class="actualite_post-title-img">
                                                      <h2 class="actualite_post_title">
                                                                <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
                                                      </h2>
                                                      <div class="thumbnail"><img class="thumbnail_image"
                                                                                  src="<?php the_post_thumbnail_url('medium-large') ?> "
                                                                                  alt=""></div>

                                            </div>

                                            <div class="actualite_description">
                                                <?php the_excerpt() ?>

                                            </div>
                                            <div class="post_btn">
                                                      <a class="lire_suite" href="<?php echo get_permalink(); ?>">Lire
                                                                la suite</a>
                                            </div>
                                  </div>

                  <?php endwhile; ?>
              <?php endif; ?>

          </div>
          <aside><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : ?>
              <?php endif; ?></aside>
</div>

<?php get_footer(); ?>
