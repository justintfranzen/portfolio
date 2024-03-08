<?php

function featured_reads_shortcode($atts)
{
  // Query posts
  $args = [
    'tag' => 'featured-read',
    'posts_per_page' => 3,
  ];

  $query = new WP_Query($args);

  // Start output buffer
  ob_start();

  echo '<div class="featured-posts-section">';
  // Check if there are posts
  if ($query->have_posts()) {
    // Loop through the posts
    while ($query->have_posts()) {
      $query->the_post();

      // Display post content
      echo '<div class="featured-post">';
      echo '<div class="post-content">';
      echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
      echo '</div>';
      echo '<div class="post-content post-information">';
      echo get_the_category_list();
      echo '<h4><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
      echo '<p class="post-date">' . get_the_date() . '</p>';
      echo '<p class="excerpt">' . get_the_excerpt() . '</p>';
      echo '<a class="read-more" href="' . get_permalink() . '">Read More</a>';
      echo '</div>';
      echo '</div>';
    }
  }

  echo '</div>';

  // End output buffer
  $output = ob_get_clean();

  // Restore original post data
  wp_reset_postdata();

  return $output;
}

function register_featured_reads_shortcode()
{
  // Register the shortcode
  add_shortcode('featured_reads', 'featured_reads_shortcode');
}

?>
