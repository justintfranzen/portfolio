<?php

add_action('init', 'dvsw_create_feature_taxonomy', 0);
function dvsw_create_feature_taxonomy()
{
  $labels = [
    'name' => _x('Industries', 'taxonomy general name'),
    'singular_name' => _x('feature', 'taxonomy singular name'),
  ];

  register_taxonomy(
    'feature',
    ['post'],
    [
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'query_var' => true,
    ],
  );
}

add_action('init', 'mml_create_feature_category_taxonomy', 0);
function mml_create_feature_category_taxonomy()
{
  $labels = [
    'name' => _x('Categories', 'taxonomy general name'),
    'singular_name' => _x('Category', 'taxonomy singular name'),
  ];

  register_taxonomy(
    'featured-category',
    ['featured'],
    [
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'query_var' => true,
    ],
  );
}
