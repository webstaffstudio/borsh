<?php

// ACF functions here

// Load ACF field definitions
$acfBlocksDir = __DIR__ . '/acf-blocks/';
if (file_exists($acfBlocksDir) && is_dir($acfBlocksDir)) {
    foreach (new DirectoryIterator($acfBlocksDir) as $file) {
        if ($file->isDot() || $file->getExtension() !== 'php') {
            continue;
        }

        require_once $file->getPathname();
    }
}

if (function_exists('acf_register_block')) {

    add_action('block_categories_all', function ($categories) {
        return array_merge(
            [
                [
                    'slug' => 'borsh',
                    'title' => __('Borsh', THEME_TD),
                ],
            ],
            $categories
        );
    });

    add_action('acf/init', function () {
        $blockFiles = new DirectoryIterator(locate_template('template-parts/blocks/'));

        foreach ($blockFiles as $file) {
            if ($file->isDot() || $file->getExtension() !== 'php') {
                continue;
            }

            $blockName = $file->getBasename('.php');
            $blockSlug = 'borsh_' . $blockName;
            $blockPath = 'template-parts/blocks/' . $blockName . '.php';

            $blockOptions = get_file_data(locate_template($blockPath), [
                'title' => 'Block Name',
                'desc' => 'Description',
                'icon' => 'Icon',
                'keywords' => 'Keywords',
                'supports' => 'Supports',
            ]);

            acf_register_block_type([
                'name' => $blockSlug,
                'title' => $blockOptions['title'] ?: __('Unnamed Block:', THEME_TD) . ' ' . $blockName,
                'description' => $blockOptions['desc'] ?? '',
                'category' => 'borsh',
                'icon' => $blockOptions['icon'] ?? 'admin-generic',
                'keywords' => isset($blockOptions['keywords']) ? explode(' ', $blockOptions['keywords']) : '',
                'supports' => isset($blockOptions['supports']) ? json_decode($blockOptions['supports'], true) : '',
                'render_template' => $blockPath,
                'mode' => 'edit',
            ]);
        }
    });


    add_filter('render_block', function ($block_content, $block) {
        if (empty($block_content)) return $block_content;

        ob_start();
        wp_print_styles($block['blockName']);
        return ob_get_clean() . $block_content;
    }, 10, 3);
}
