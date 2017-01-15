<?php

/**
 * 
 * @global type $wpdb
 */
function qsoft_get_all_product() {
    global $wpdb;
    $page = isset($_REQUEST['page']) ? filter_var($_REQUEST['page'], FILTER_SANITIZE_NUMBER_INT) : 1;
    $postPerPage = isset($_REQUEST['postPerPage']) ? filter_var($_REQUEST['postPerPage'], FILTER_SANITIZE_NUMBER_INT) : 8;

    $start = ($postPerPage * $page) - $postPerPage;
    $data = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM wp_posts where post_type='product' "
                    . "and post_status='publish' "
                    . "limit %d, %d ", $start, $postPerPage));
//    var_dump($data);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

add_action('wp_ajax_nopriv_get_product', 'qsoft_get_all_product');
add_action('wp_ajax_get_product', 'qsoft_get_all_product');



