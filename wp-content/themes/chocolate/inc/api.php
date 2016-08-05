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
        return $this->getResultsSpecific($args);
    }

    function home() {
        $home['details'] = $this->getResults(['posts_per_page' => '1', 'post_status' => 'publish', 'post_type' => 'post', 'p' => 134])[0];
        return $home;
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
        return $this->getResultsSpecific($args);
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
        return $this->getResultsSpecific($args);
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
        return $this->getResultsSpecific($args);
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

    function getResultsSpecific($args, $single = NULL) {
        $output = [];
        $query = new WP_Query($args);
        while ($query->have_posts()): $query->the_post();
            $id = get_the_ID();
            $post = [
                'id' => $id,
                'title' => get_the_title(),
            ];
            array_push($output, $post);
        endwhile;
        return $output;
    }

    function getImg($id) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
        if (!is_array($image)):
            $image = wp_get_attachment_image_src(38, 'full');
        endif;
        return $image['0'];
    }

    function contactUs() {
        return ['msg' => 'hey'];
        $headers = 'Content-type: text/html';
        $name = $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $message = $_REQUEST['message'];
        $body = "<p>Enquiry from $name</p><br><br>New Enquiry<br><br><p>Email : $email</p>Phone : $phone <p>Message : $message</p><br><br>Regards,<br><br>Team Ayushakti";
        wp_mail(get_option('smtp_user'), "Contact Us", $body, $headers);
        $bodyUser = "Hi $name,<br><br> Thank you for contacting us. We will get back to you shortly.<br><br>Regards,<br><br>Team Ayushakti";
        wp_mail($email, "Contact Us", $bodyUser, $headers);
        return ['msg' => "Thank you for getting in touch. We will respond to you shortly.", 'errorType' => 'success'];
    }

    function forgotPassword() {
        $getUser = get_user_by('login', $_REQUEST['emailForgot']);
        $getUserEmail = get_user_by('email', $_REQUEST['emailForgot']);
        if (!empty($getUser)):
            $uid = $getUser->data->ID;
        elseif (!empty($getUserEmail)):
            $uid = $getUserEmail->data->ID;
        else:
            return ['msg' => "Not a valid Email Id", 'errorType' => 'danger'];
        endif;
        $user_data = get_userdata($uid)->data;
        $getFirstName = get_user_meta($uid, 'first_name')[0];
        $user_login = $user_data->user_login;
        $user_email = $user_data->user_email;
        $first_name = $getFirstName;
        $key = get_password_reset_key($user_data);
        $url = network_site_url("reset-password/?action=rp&key=$key&login=" . rawurlencode($user_login), 'login');
        if (!empty($url)):
            return $this->forgotPasswordMail($first_name, $user_email, $user_login, $key);
        endif;
    }

    function forgotPasswordMail($first_name, $user_email, $user_login, $key) {
        $message = __("Hi $first_name,") . "<br><br>";
        $message .= __('Regarding your request for password retrieval, please follow the link: ') . "<br><br>";
        $message .= network_site_url("reset-password/?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') . "<br><br>";
        $message .= __('Regards,') . "<br>";
        $message .= __('Team Ayushakti');
        $headers = 'Content-type: text/html';
        $getResult = wp_mail($user_email, "Reset Password", $message, $headers);
        if (empty($user_email)):
            return ['msg' => 'Email Id does not exist', 'errorType' => 'danger'];
        endif;
        if ($getResult):
            return ['msg' => 'Reset password link has been send to your Email Id', 'errorType' => 'success'];
        else:
            return ['msg' => 'Something goes wrong try again later!', 'errorType' => 'danger'];
        endif;
    }

    function forgotPasswordReset() {
        $getPassword = $_REQUEST['newPassword'];
        $getkey = $_REQUEST['key'];
        $getLogin = urldecode($_REQUEST['login']);
        $result = check_password_reset_key($getkey, $getLogin);
        if (isset($result->errors)):
            return ['msg' => "Invalid key", 'errorType' => 'danger'];
        else:
            $user_id = (array) $result->data;
            $getResult = wp_set_password($getPassword, $user_id['ID']);
            if (!is_wp_error($getResult)):
                return ['msg' => "Password Changed Successfully", 'errorType' => 'success'];
            else:
                return ['msg' => "Invalid key", 'errorType' => 'danger'];
            endif;
        endif;
    }

}
