<?php

function remove_menus() {

    if (get_current_user_id() != 1) {
        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('themes.php');                 //Appearance
        remove_menu_page('plugins.php');                //Plugins
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('tools.php');
    }
}

add_action('admin_menu', 'remove_menus');
?>
