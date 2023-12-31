<?php

function firsttheme_post_meta()
{

    /* translators: %s: Post Date */
    printf(
        esc_html__('Posted on %s', '_themename'),
        '<a href="' . esc_url(get_permalink()) . '"><time datetime="' . esc_attr(get_the_date('c')) . '">' .  esc_html(get_the_date()) . '</time></a>'
    );

    /* translators: %s: Post Author */
    printf(
        esc_html__(' By %s', '_themename'),
        '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
    );
}


function firstheme_readmore_link()
{
    echo '<a class="c-post__readmore" href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
    
    /* translators: %s: Post Title */
    printf(

        /* 
            wp_kses: Filters text content and strips out disallowed HTML.

            This function makes sure that only the allowed HTML element names, attribute names, 
            attribute values, and HTML entities will occur in the given text string.
        
        */
        wp_kses(
            __( 'Read More <span class="u-screen-reader-text">About %s</span>', '_themename' ),
            [
                'span' => [
                    'class' => []
                ]
            ]
        ),
        get_the_title()
    );

    echo '</a>';
}