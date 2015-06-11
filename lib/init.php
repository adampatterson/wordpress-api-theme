<?php
if ( ! function_exists( 'api_setup' ) ):

    function api_setup()
    {
        // Prevent File Modifications
        define('DISALLOW_FILE_EDIT', true);

        // Image Thumbnail Sizes
        add_image_size('featured', 1110, 616, true);
        add_image_size('large', 1024, 768, true);
        add_image_size('medium', 800, 600, true);
        add_image_size('grid', 300, 230, true);
        add_image_size('square', 150, 150, true);
        add_image_size('staff', 150, 150, true);
    }
endif;

add_action( 'after_setup_theme', 'api_setup' );