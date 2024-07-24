<?php

/**
 * Plugin Name: Spry Custom Elements
 * Plugin URI: https://sprywebtech.com
 * Description: Custom Elements for Breakdance WordPress page builder. Elements created by Spry Web Tech.
 * Author: Spry Web Tech
 * Author URI: https://sprywebtech.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace SpryCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'SpryCustomElements',
        'element',
        'Spry Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'SpryCustomElements',
        'macro',
        'Spry Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'SpryCustomElements',
        'preset',
        'Spry Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
