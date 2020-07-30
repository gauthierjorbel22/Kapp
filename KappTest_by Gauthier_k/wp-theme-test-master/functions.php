<?php

define( 'THEMEPATH', get_template_directory() );

require THEMEPATH . '/inc/class-theme-core.php';
require THEMEPATH . '/inc/class-theme-utils.php';

// Initiate theme instance
Theme_Core::init();

