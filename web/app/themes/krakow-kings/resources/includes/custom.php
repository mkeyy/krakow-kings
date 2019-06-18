<?php

/**
 * Generates inline svg with the appropriate classes
 * @param null $filename
 * @param null $additionalClasses
 * @return mixed|string
 */
function assetSvg($filename = null, $additionalClasses = null)
{
    $svg_path = '/assets/images/icons/';

    // Check the SVG file exists
    if (file_exists(get_template_directory() . $svg_path . $filename . '.svg')) {
        $svg = file_get_contents(get_template_directory_uri() . $svg_path . $filename . '.svg');

        if ($additionalClasses)
            return str_replace("<svg", '<svg class="svg-icon-inline svg-icon--' . basename($filename, ".svg") . ' ' . $additionalClasses . '"', $svg);
        else
            return str_replace("<svg", '<svg class="svg-icon-inline svg-icon--' . basename($filename, ".svg") . '"', $svg);
    }

    // Return a blank string if we can't find the file.
    return '';
}
