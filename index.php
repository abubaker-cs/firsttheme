<?php get_header(); ?>

<!-- Check If posts exist, if yes then execute while loop -->

<?php if (have_posts()) { ?>

    <?php while (have_posts()) { ?>

        <?php the_post(); ?>

        <!-- Display Posts code here -->
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a>
        </h2>

        <!-- Meta Data: get_the_date('l, F j, Y'); -->
        <div>
            Posted on <a href="<?php echo get_permalink() ?>"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></a>

            By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php echo get_the_author(); ?> </a>
            </a>
        </div>

        <!-- Display the post thumbnail AKA featured image -->
        <?php // the_post_thumbnail();?>

        <!-- Display excerpt of the post -->
        <?php the_excerpt(); ?>

        <!-- READMORE -->
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> Read More <span class="u-screen-reader-text">About <?php the_title(); ?></span> </a>

        <!-- End the while loop -->
    <?php } ?>
    
    <?php the_posts_pagination(); ?>


<?php } else { ?>

    <p><?php _e('Sorry, no Posts To Display.'); ?></p>

<?php } ?>

<?php get_footer(); ?>