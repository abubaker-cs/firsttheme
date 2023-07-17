<?php get_header(); ?>

<!-- Check If posts exist, if yes then execute while loop -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display Posts code here -->
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a>
        </h2>

        <!-- Meta Data -->
        <div>
            Posted on <a href="<?php get_permalink() ?>"><time datetime="<?php get_the_date('c') ?>"><?php get_the_date('l F j, Y'); ?></time></a>
        </div>

        <!-- Display the post thumbnail AKA featured image -->
        <?php // the_post_thumbnail(); ?>

        <!-- Display excerpt of the post -->
        <?php //the_excerpt(); ?>

        <!-- End the while loop -->
    <?php endwhile;
else : ?>

    <p><?php _e('No Posts To Display.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>