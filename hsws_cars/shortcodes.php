<?php
// add short code "cars_list"
add_shortcode('car_list', 'hsws_car_list_func');

function hsws_car_list_func( $atts) {
    $user = get_user_by('slug', 'admin' || 'author');
    if ($user == 'admin' || 'author' ) {

        $query = new WP_Query( array(
                'post_status' => 'Publish' || 'Pending',
                'post_type'           => 'cars',
                'author' => get_current_user_id(),)
        );

        $output = '';

        while ($query->have_posts() ) :
            $query->the_post();
            $status =  get_post_status() . '<br><br>';
            $post_link = '<a href="' . get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title()  .'</a><br>';
            $output .= $post_link . 'Статус записи: ' . $status;

            endwhile;
        wp_reset_postdata();
        return $output;
    }
}

// add short code "add_car_form"
add_shortcode('add_car_form', 'hsws_add_car_form_func');

function hsws_add_car_form_func($atts) {
    $user = get_user_by('slug', 'admin' || 'author');
    if ($user == 'admin' || $user == 'author' ) {
        require "car_form.php";
    }

    function insertData() {
        if(isset($_POST['submit'])){
            $new_post = array(
                'ID' => '',
                'post_content' => $_POST['content'] ,
                'post_title' => $_POST['title'],
                'post_status' => "Pending", // Publish Future Draft Pending Private Trash
                'post_taxmodels' => $_POST['models'],
                'post_type' => 'cars'
            );
            wp_insert_post($new_post);
        }else{
            return false;
        }
    }
    add_action( 'insert_data_hook', 'insertData' ); do_action('insert_data_hook');
}

// Add CUSTOM POST TYPE to the page
add_shortcode('hsws_add_custom_post_type_block', 'add_custom_post_type_block');

function add_custom_post_type_block() {
//    require "custom_post_type_block.php";
}