<?php
add_action('cmb2_admin_init', 'kings_front_page_metabox');
/**
 * Hook in and add metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function kings_front_page_metabox()
{
    $prefix = '_kings_front_page_';

    // Hero CMB
    $carousel = new_cmb2_box([
        'id' => $prefix . 'hero',
        'title' => esc_html__('hero section', 'kings'),
        'object_types' => ['page'],
        'priority' => 'high',
        'show_on' => array('key' => 'id', 'value' => get_option('page_on_front')),
    ]);
    $carousel->add_field([
        'name' => esc_html__('posts', 'kings'),
        'id' => $prefix . 'posts',
        'type' => 'post_search_ajax',
        'desc' => __('Start typing post title', 'kings'),
        'limit' => 4,
        'sortable' => true,
        'query_args' => array(
            'post_type' => array('post'),
            'post_status' => array('publish'),
            'posts_per_page' => -1
        )
    ]);

    // Match CMB
    $match = new_cmb2_box([
        'id' => $prefix . 'match',
        'title' => esc_html__('match', 'kings'),
        'object_types' => ['page'],
        'priority' => 'high',
        'show_on' => array('key' => 'id', 'value' => get_option('page_on_front')),
    ]);
    $tOne = $match->add_field([
        'id' => $prefix . 't_one',
        'type' => 'group',
        'repeatable' => false,
        'options' => [
            'group_title' => esc_html__('team one', 'kings'),
            'closed' => true,
        ]
    ]);
    $match->add_group_field($tOne, [
        'name' => esc_html__('logo', 'kings'),
        'id' => 'logo',
        'type' => 'file',
        'repeatable' => false
    ]);
    $match->add_group_field($tOne, [
        'name' => esc_html__('name', 'kings'),
        'id' => 'name',
        'type' => 'text',
        'repeatable' => false
    ]);
    $match->add_field([
        'name' => esc_html__('date', 'kings'),
        'id' => $prefix . 'match_date',
        'type' => 'text_date',
    ]);
    $match->add_field([
        'name' => esc_html__('time', 'kings'),
        'id' => $prefix . 'match_time',
        'type' => 'text_time',
        'time_format' => 'G:i',
    ]);
    $match->add_field([
        'name' => esc_html__('place', 'kings'),
        'id' => $prefix . 'match_place',
        'type' => 'text'
    ]);
    $match->add_field([
        'name' => esc_html__('score', 'kings'),
        'id' => $prefix . 'match_score',
        'type' => 'text'
    ]);
    $match->add_field([
        'name' => esc_html__('background', 'kings'),
        'id' => $prefix . 'match_background',
        'type' => 'file'
    ]);
    $match->add_field([
        'name' => esc_html__('URL link to the match summary', 'kings'),
        'id' => $prefix . 'match_summary',
        'type' => 'text_url'
    ]);
    $tTwo = $match->add_field([
        'id' => $prefix . 't_two',
        'type' => 'group',
        'repeatable' => false,
        'options' => [
            'group_title' => esc_html__('team two', 'kings'),
            'closed' => true
        ]
    ]);
    $match->add_group_field($tTwo, [
        'name' => esc_html__('logo', 'kings'),
        'id' => 'logo',
        'type' => 'file',
        'repeatable' => false
    ]);
    $match->add_group_field($tTwo, [
        'name' => esc_html__('name', 'kings'),
        'id' => 'name',
        'type' => 'text',
        'repeatable' => false
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

