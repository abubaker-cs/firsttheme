<?php get_header(); ?>

//Check If posts exist, if yes then execute while loop

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

//Display Posts code here

           <h2><?php the_title() ;?></h2> //Display the title of the post

            <?php the_post_thumbnail(); ?> //Display the post thumbnail AKA featured image

            <?php the_excerpt(); ?> //Display excerpt of the post

<?php endwhile; else : ?> //End the while loop

                       <p><?php _e( 'No Posts To Display.' ); ?></p>

<?php endif; ?> //end If statement

<?php get_footer(); ?>