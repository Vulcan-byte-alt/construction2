<?php
/**
 * Roca Group — functions.php
 * Add each new section below with a comment describing what it does and why.
 */

// ─── 1. ENQUEUE SCRIPTS & STYLES ────────────────────────────────────────────
// Loads Tailwind (CDN for dev), GSAP (CDN), and main.js.
// main.css is compiled output — swap Tailwind CDN for this in prod.
function roca_enqueue_assets() {
    // Tailwind CDN (dev only — replace with compiled main.css for production)
    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false
    );

    // GSAP CDN
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        [],
        '3.12.5',
        true
    );

    // GSAP ScrollTrigger plugin
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        ['gsap'],
        '3.12.5',
        true
    );

    // Theme main JS
    wp_enqueue_script(
        'roca-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['gsap', 'gsap-scrolltrigger'],
        wp_get_theme()->get('Version'),
        true
    );

    // Theme main CSS (compiled Tailwind for production)
    wp_enqueue_style(
        'roca-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'roca_enqueue_assets');
add_filter('show_admin_bar', '__return_false');


// ─── 2. NAV MENUS ───────────────────────────────────────────────────────────
// Registers Primary (header) and Footer nav menu locations.
function roca_register_menus() {
    register_nav_menus([
        'primary' => __('Primary Navigation', 'roca-group'),
        'footer'  => __('Footer Navigation', 'roca-group'),
    ]);
}
add_action('after_setup_theme', 'roca_register_menus');


// ─── 3. THEME SETUP ─────────────────────────────────────────────────────────
// Adds title-tag support, post-thumbnails, and HTML5 markup.
function roca_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'roca_theme_setup');


// ─── 4. PROJECTS CUSTOM POST TYPE ───────────────────────────────────────────
// Registers the "Projects" CPT used across Our Projects pages.
function roca_register_projects_cpt() {
    $labels = [
        'name'               => __('Projects', 'roca-group'),
        'singular_name'      => __('Project', 'roca-group'),
        'add_new'            => __('Add New Project', 'roca-group'),
        'add_new_item'       => __('Add New Project', 'roca-group'),
        'edit_item'          => __('Edit Project', 'roca-group'),
        'new_item'           => __('New Project', 'roca-group'),
        'view_item'          => __('View Project', 'roca-group'),
        'search_items'       => __('Search Projects', 'roca-group'),
        'not_found'          => __('No projects found', 'roca-group'),
        'not_found_in_trash' => __('No projects found in Trash', 'roca-group'),
    ];

    register_post_type('project', [
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => ['slug' => 'projects'],
        'menu_icon'           => 'dashicons-building',
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'        => true,
    ]);
}
add_action('init', 'roca_register_projects_cpt');


// ─── 5. ACF FIELDS — PROJECTS ───────────────────────────────────────────────
// Registers ACF field group for the Projects CPT.
// Fields: project_status, sector, location, year, featured_image, gallery.
// Requires ACF plugin to be active.
function roca_register_acf_project_fields() {
    if ( ! function_exists('acf_add_local_field_group') ) {
        return;
    }

    acf_add_local_field_group([
        'key'      => 'group_project_details',
        'title'    => 'Project Details',
        'fields'   => [
            [
                'key'           => 'field_project_status',
                'label'         => 'Project Status',
                'name'          => 'project_status',
                'type'          => 'select',
                'choices'       => [
                    'current'   => 'Current',
                    'completed' => 'Completed',
                ],
                'default_value' => 'current',
                'required'      => 1,
            ],
            [
                'key'      => 'field_project_sector',
                'label'    => 'Sector',
                'name'     => 'sector',
                'type'     => 'text',
                'required' => 0,
            ],
            [
                'key'      => 'field_project_location',
                'label'    => 'Location',
                'name'     => 'location',
                'type'     => 'text',
                'required' => 0,
            ],
            [
                'key'      => 'field_project_year',
                'label'    => 'Year',
                'name'     => 'year',
                'type'     => 'number',
                'required' => 0,
            ],
            [
                'key'           => 'field_project_featured_image',
                'label'         => 'Featured Image',
                'name'          => 'featured_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'required'      => 0,
            ],
            [
                'key'           => 'field_project_gallery',
                'label'         => 'Gallery',
                'name'          => 'gallery',
                'type'          => 'gallery',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'required'      => 0,
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'project',
                ],
            ],
        ],
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ]);
}
add_action('acf/init', 'roca_register_acf_project_fields');
