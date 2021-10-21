<?php

define( 'MAYUKI_VERSION', wp_get_theme()->get( 'Version' ) );

// Theme Support
require_once 'inc/theme-support.php';

// Block patterns.
require_once 'inc/block-patterns.php';

// Block styles.
require_once 'inc/block-styles/index.php';

// Stylesheets
require_once 'inc/enqueue_styles.php';
