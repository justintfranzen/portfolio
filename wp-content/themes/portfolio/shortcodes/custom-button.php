<?php
function custom_button_shortcode($atts)
{
  // Shortcode attributes.
  $a = shortcode_atts(
    [
      'title' => 'title',
      'link' => 'description',
    ],
    $atts,
  );
  ob_start();
  ?>

    <div class="custom-button">
      <a href="<?php echo $a['link']; ?>" class="tertiary"><?php echo $a['title']; ?></a>
    </div>

    <?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}

function register_custom_button_shortcode()
{
  add_shortcode('custom_button', 'custom_button_shortcode');
}
?>
