<?php
add_action('cmb2_admin_init', 'kings_posts_metabox');
/**
 * Hook in and add metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function kings_posts_metabox()
{
    $prefix = '_kings_posts_';
    $post = new_cmb2_box([
        'id' => $prefix . 'post',
        'title' => esc_html__('post', 'kings'),
        'object_types' => ['post'],
        'priority' => 'high',
    ]);
    $post ->add_field([
        'name' => esc_html__('short description', 'kings'),
        'id' => $prefix . 'short_description',
        'type' => 'wysiwyg',
        'options' => [
            'textarea_rows' => 5,
        ],
    ]);
}

