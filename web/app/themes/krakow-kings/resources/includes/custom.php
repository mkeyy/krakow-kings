<?php

/**
 * Generates inline svg with the appropriate classes
 * @param null $filename
 * @param null $additionalClasses
 * @param null $id
 * @return mixed|string
 */
function assetSvg($filename = null, $additionalClasses = null, $id = null)
{
    if (isset($id)) {
        $file = $svg_path = wp_get_attachment_image_url($id, 'logo', false);
    } else {
        $file = file_exists(get_template_directory() . '/assets/images/icons/' . $filename . '.svg');
        $svg_path = get_template_directory_uri() . '/assets/images/icons/' . $filename . '.svg';
    }

    // Check the SVG file exists
    if ($file) {
        $svg = file_get_contents($svg_path);

        if ($additionalClasses)
            return str_replace("<svg", '<svg class="kk-svg-inline kk-svg--' . basename($filename, ".svg") . ' ' . $additionalClasses . '"', $svg);
        else
            return str_replace("<svg", '<svg class="kk-svg-inline kk-svg--' . basename($filename, ".svg") . '"', $svg);
    }

    // Return a blank string if we can't find the file.
    return '';
}

/**
 *  Disable content editor for posts
 */
add_action('init', function () {
    remove_post_type_support('post', 'editor');
});

/**
 * Removes comments from admin panel
 */
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
