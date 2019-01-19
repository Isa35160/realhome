<?php get_header(); ?>
<?php
$page_title = get_the_title(get_option('page_for_posts', true));?>

<!--<h2 class="container">--><?php //echo $page_title ?><!--</h2>-->

<div class="articles">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container article">
                <div class="post-title-img">
                    <div class="thumbnail"><img class="thumbnail_image" src="<?php the_post_thumbnail_url('medium-large') ?> " alt=""></div>
                    <h1><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a> </h1>
                </div>
                <div class="post-cat-date">
                    <?php  the_time('j F Y'); ?> <?php the_category() ?>
                </div>
                <div class="description">
                    <?php the_excerpt() ?>

                </div>
                <div >
                    <a class="lire_suite" href="<?php echo get_permalink(); ?>">Lire la suite</a>
                </div>
            </div>

        <?php endwhile;?>
    <?php endif;?>
</div>

<?php get_footer(); ?>
