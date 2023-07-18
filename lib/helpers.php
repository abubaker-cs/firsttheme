<?php

function firsttheme_post_meta()
{ ?>

    Posted on <a href="<?php echo get_permalink() ?>"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></a>

    By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php echo get_the_author(); ?> </a>
    </a>

<?php

}


function firstheme_readmore_link()
{ ?>

    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(['echo' => false]); ?>"> Read More <span class="u-screen-reader-text">About <?php the_title(); ?></span> </a>


<?php

}

?>