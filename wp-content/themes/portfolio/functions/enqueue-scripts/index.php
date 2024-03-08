<?php
function portfolio_enqueue_styles()
{
  $site_version = defined('PORTFOLIO_SITE_VERSION') ? MML_SITE_VERSION : '1.0.0';
  wp_enqueue_style('portfolio', get_stylesheet_directory_uri() . '/dist/index.css', [], $site_version);
  wp_enqueue_style(
    'nunito-sans',
    'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap',
    '',
    '1.0.0',
    false,
  );
  wp_enqueue_style(
    'open-sans',
    'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap',
    '',
    '1.0.0',
    false,
  );
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles', 9999999);

function portfolio_enqueue_scripts()
{
  $site_version = defined('PORTFOLIO_SITE_VERSION') ? MML_SITE_VERSION : '1.0.0';
  wp_enqueue_script('portfolio', get_stylesheet_directory_uri() . '/dist/index.js', [], $site_version, true);
  wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/88c504b7a6.js', '', '6.0.1', false);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts', 11);
