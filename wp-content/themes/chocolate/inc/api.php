<?php

$api = new API();

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'api') {
    $method = isset($_REQUEST['method']) ? $_REQUEST['method'] : '';
    $output = [];

    if (method_exists($api, $method)) {
        $output = $api->$method();
    } else {
        $output = ['error' => 'Method Does Not Exist'];
    }

    header("Content-Type: application/json");
    echo json_encode($output);
    die();
}

class API {

    protected $userId;

    function __construct() {
        global $user_ID;

        if (!empty($user_ID))
            $this->userId = $user_ID;
        else if (!empty($_REQUEST['userId']))
            $this->userId = $_REQUEST['userId'];
        else
            $this->userId = NULL;
    }

    function getPage() {
        return $this->getResults(['post_type' => 'page', 'page_id' => $_REQUEST['id']], 1);
    }

    function getCatPosts() {
        return $this->getResults(['post_type' => 'posts', 'cat' => [ $_REQUEST['cid']]]);
    }

    function getCategories() {
        return get_categories(['child_of' => $_REQUEST['id'], 'hide_empty' => 0, 'hierarchiel' => TRUE]);
    }

    function getResults($args, $single = NULL) {
        $output = [];
        $query = new WP_Query($args);
        while ($query->have_posts()): $query->the_post();
            $id = get_the_ID();
            $post = [
                'id' => $id,
                'title' => get_the_title(),
                'content' => get_the_content(),
                'link' => get_permalink($post->ID),
                'category' => get_the_category($post->ID),
                'img' => $this->getImg($post->ID)
            ];
            foreach (get_fields($id) as $k => $v) {
                $post[$k] = $v;
            }
            array_push($output, $post);
        endwhile;

        if ($single == 1)
            $output = $output[0];

        return $output;
    }

    function getImg($id) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
        if (!is_array($image)):
            $image = wp_get_attachment_image_src(38, 'full');
        endif;
        return $image['0'];
    }

}
