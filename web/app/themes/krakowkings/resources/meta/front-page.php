<?php
add_action('cmb2_admin_init', 'krakowkings_front_page_metabox');
/**
 * Hook in and add metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function krakowkings_front_page_metabox()
{
    $prefix = '_krakowkings_front_page_';
    $metabox1 = new_cmb2_box([
        'id' => $prefix . 'main_box',
        'title' => esc_html__('Main', 'krakowkings'),
        'object_types' => ['page'],
        'priority' => 'high',
        'show_on' => array('key' => 'id', 'value' => get_option('page_on_front')),
    ]);
    $metabox1->add_field([
        'name' => esc_html__('Tytuł', 'krakowkings'),
        'id' => $prefix . 'heading',
        'type' => 'text',
    ]);
}

/**
 * Disable default wysiwyg editor for front-page.
 */
add_action('admin_head', function ($can) {
    global $pagenow;
    if (!('post.php' == $pagenow)) {
        return;
    }
    $postId = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
    if (!isset($postId)) {
        return;
    }
    if ($postId == get_option('page_on_front')) {
        remove_post_type_support('page', 'editor');
    }
});

