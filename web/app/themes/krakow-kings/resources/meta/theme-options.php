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
    $options = new_cmb2_box(array(
        'id' => 'kings_option_metabox',
        'title' => esc_html__('Options', 'kings'),
        'object_types' => array('options-page'),
        'option_key' => 'kings_options', // The option key and admin menu page slug.
    ));
    /*
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */
    $options->add_field(array(
        'name' => __('Logo', 'kings'),
        'desc' => __('Website logo', 'kings'),
        'id' => 'logo',
        'type' => 'file'
    ));
    $socials = $options->add_field(array(
        'id' => 'socials',
        'type' => 'group',
        'description' => esc_html__('Socials Links', 'kings'),
        'options' => array(
            'group_title' => esc_html__('Social {#}', 'kings'),
            'add_button' => esc_html__('Add another social', 'kings'),
            'remove_button' => esc_html__('Delete social', 'kings'),
            'sortable' => true,
            'closed' => true,
        ),
    ));
    $options->add_group_field($socials, array(
        'name' => esc_html__('Name', 'kings'),
        'description' => esc_html__('Social name', 'kings'),
        'id' => 'name',
        'type' => 'text'
    ));
    $options->add_group_field($socials, array(
        'name' => esc_html__('Link', 'kings'),
        'description' => esc_html__('Social page link', 'kings'),
        'id' => 'link',
        'type' => 'text'
    ));
}