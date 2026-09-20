<?php
/**
 * Plugin Name:       DBCleaner Core: Database Query & Storage Optimizer
 * Plugin URI:        https://github.com/smit-backend/press-db-purger
 * Description:       High-performance database optimization plugin to index tables, purge orphaned metadata/revisions, and reduce overhead.
 * Version:           1.0.0
 * Author:            smit-backend
 * Author URI:        https://github.com/smit-backend
 * License:           MIT
 * Text Domain:       press-db-purger
 */

if (!defined('ABSPATH')) {
    exit;
}

final class TableOptimizer
{
    public static function boot(): void
    {
        // WordPress hooks bootstrapping
    }
}

add_action('plugins_loaded', ['TableOptimizer', 'boot']);
