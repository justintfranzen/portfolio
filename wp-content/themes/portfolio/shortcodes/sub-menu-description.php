<?php
function sub_menu_description_shortcode($atts)
{
  // Shortcode attributes.
  $a = shortcode_atts(
    [
      'title' => 'title',
      'description' => 'description',
      'link-name' => 'link name',
      'link' => 'link',
    ],
    $atts,
  );
  ob_start();
  ?>

    <div class="menu-content">
      <span class="title"><?php echo $a['title']; ?></span>
      <span class="description"><?php echo $a['description']; ?></span>
      <a href="<?php echo $a['link']; ?>" class="et_pb_button"><?php echo $a['link-name']; ?></a>
    </div>

    <?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}

function register_sub_menu_description_shortcode()
{
  add_shortcode('sub_menu_description', 'sub_menu_description_shortcode');
}
?>
