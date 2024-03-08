<?php

add_action('init', 'jvl_create_featured_post_type');
function jvl_create_featured_post_type()
{
  register_post_type('featured', [
    'labels' => [
      'name' => __('Featured Reads'),
      'singular_name' => __('Featured'),
    ],
    'public' => true,
    'exclude_from_search' => false,
    'menu_position' => 5,
    // 'menu_icon' => 'dashicons-cart',
    'taxonomies' => ['featured-category', 'feature'],
    'supports' => ['title', 'revisions', 'page-attributes', 'excerpt', 'thumbnail', 'editor'],
    'has_archive' => false,
  ]);
}
