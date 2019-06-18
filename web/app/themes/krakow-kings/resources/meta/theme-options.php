<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action('cmb2_admin_init', 'kings_register_theme_options_metabox');
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function kings_register_theme_options_metabox()
{
    /**
     * Registers options page menu item and form.
     */
    $cmb_options = new_cmb2_box(array(
        'id' => 'kings_option_metabox',
        'title' => esc_html__('Options', 'kings'),
        'object_types' => array('options-page'),
        'option_key' => 'kings_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
    ));
    /*
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */
    $cmb_options->add_field(array(
        'name' => __('Logo', 'kings'),
        'desc' => __('Website logo', 'kings'),
        'id' => 'logo',
        'type' => 'file'
    ));
    $cmb_options->add_field(array(
        'name' => __('Facebook', 'kings'),
        'desc' => __('Facebook page link', 'kings'),
        'id' => 'facebook',
        'type' => 'text'
    ));
    $cmb_options->add_field(array(
        'name' => __('Instagram', 'kings'),
        'desc' => __('Instagram page link', 'kings'),
        'id' => 'instagram',
        'type' => 'text'
    ));
}