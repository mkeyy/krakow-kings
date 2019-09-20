<?php
add_action('cmb2_admin_init', 'kings_sponsors_metabox');
/**
 * Hook in and add metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function kings_sponsors_metabox()
{
    $prefix = '_kings_sponsors_';
    $sponsor = new_cmb2_box([
        'id' => $prefix . 'sponsor',
        'title' => esc_html__('sponsor', 'kings'),
        'object_types' => ['sponsor'],
        'priority' => 'high',
    ]);
    $sponsor ->add_field([
        'name' => esc_html__('link', 'kings'),
        'id' => $prefix . 'link',
        'type' => 'text_url'
    ]);
}

