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

    function getDiseases($id) {

        $args = ['post_type' => 'diseases',
            'tax_query' => [['taxonomy' => 'diseasesCategory',
            'field' => 'id',
            'terms' => $id]]
        ];
        return $this->getResults($args);
    }

    function getDiseasesById($id) {
        $args = ['post_type' => 'diseases', 'p' => $id];
        return $this->getResults($args);
    }

    function getHerbalSupplements($id) {
        $args = ['post_type' => 'herbalsupplements',
            'tax_query' => [['taxonomy' => 'herbalCategory',
            'field' => 'id',
            'terms' => $id]]
        ];
        return $this->getResults($args);
    }

    function getHerbalById($id) {
        $args = ['post_type' => 'herbalsupplements', 'p' => $id];
        return $this->getResults($args);
    }

    function therapy($id) {
        $args = ['post_type' => 'therapy',
            'tax_query' => [['taxonomy' => 'therapyCategory',
            'field' => 'id',
            'terms' => $id]]
        ];
        return $this->getResults($args);
    }

    function getTherapyById($id) {
        $args = ['post_type' => 'therapy', 'p' => $id];
        return $this->getResults($args);
    }

    function pulses($getId) {
        $args = ['post_type' => 'pulses',
            'tax_query' => [['taxonomy' => 'pulseCategory',
            'field' => 'id',
            'terms' => $getId]]
        ];
        return $this->getResults($args);
    }

    function getPulsesById($id) {
        $args = ['post_type' => 'pulses', 'p' => $id];
        return $this->getResults($args);
    }

    function logout() {
        wp_logout();
        wp_redirect(get_site_url());
    }

    function register() {
        $userData = [
            'user_login' => $_REQUEST['user_login'],
            'first_name' => $_REQUEST['first_name'],
            'user_email' => $_REQUEST['user_email'],
            'user_pass' => $_REQUEST['user_pass'],
            'role' => 'author',
        ];
        $email = email_exists($_REQUEST['user_email']); //check if email id exist
        if ($email != "") {
            return ['msg' => "Email Id already exist", 'errorType' => 'danger'];
        } else {
            $user_id = wp_insert_user($userData);
            update_user_meta($user_id, 'phone', $user['phone']);

            if (!is_wp_error($user_id))
                return ['msg' => 'Registered Successfully', 'errorType' => 'success', 'user' => $user_id];
            else
                return ['msg' => "Something goes wrong try again later", 'errorType' => 'danger'];
        }
    }

    function login() {
        $username = $_REQUEST['userName'];
        $password = $_REQUEST['password'];
        $credential = ['user_login' => $username, 'user_password' => $password];
        $userDetails = get_user_by('email', $username);
        $getStatus = get_user_meta($userDetails->data->ID, 'status')[0];
        if ($getStatus == 'No'):
            return ['msg' => "Sorry! Your account not yet approved", 'errorType' => 'danger'];
        endif;
        $userid = wp_signon($credential, false);
        $getId = (array) $userid->data;
        if (!is_wp_error($userid)):
            return ['msg' => "success_login", 'userData' => get_userdata($getId['ID'])];
        else:
            return ['msg' => "Sorry! Please enter valid credential", 'errorType' => 'danger'];
        endif;
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
