<?php get_header(); ?>

<!-- 
<pre>
< ? php var_dump($wp_query); ? >
</pre>
-->


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
            <?php firsttheme_post_meta(); ?>
        </div>

        <!-- Display the post thumbnail AKA featured image -->
        <?php // the_post_thumbnail();
        ?>

        <!-- Display excerpt of the post -->
        <?php the_excerpt(); ?>

        <!-- READMORE -->
        <?php firstheme_readmore_link(); ?>

        <!-- End the while loop -->
    <?php } ?>

    <?php the_posts_pagination(); ?>


<?php } else { ?>

    <!--  -->
    <p><?php esc_html_e('Sorry, no posts match your criteria', 'firsttheme'); ?></p>

<?php } ?>

<?php get_footer(); ?>