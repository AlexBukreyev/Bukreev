<!-- POST TYPE -->
<?php
    $args = array(
        'post_type'           => 'cars',
        'showposts'           => -1,
        'order'               => 'DESC',
        'orderby'             => 'date',
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            the_title();
            the_content();
        }
    } else {
        echo 'NO posts';
    }

    wp_reset_postdata();
?>