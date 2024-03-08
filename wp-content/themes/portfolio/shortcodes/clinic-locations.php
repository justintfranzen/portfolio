<?php
function clinic_locations_shortcode($atts)
{
  // Shortcode attributes.
  $a = shortcode_atts(
    [
      'street' => 'title',
      'city-state-zip' => 'city, state, zip',
      'phone' => 'link name',
      'directions-link' => 'directions',
      'book-now-link' => 'book',
      'website-link' => 'weblink',
    ],
    $atts,
  );
  ob_start();
  ?>

    <div class="clinic-locations">
      <div class="location">
        <?= $a['street'] ?>
        <br/>
        <?= $a['city-state-zip'] ?>
      </div>
      <div class="phone">
        <?= $a['phone'] ?>
      </div>
    </div>

    <div class="location-options">
      <a href="<?= $a['directions-link'] ?>" target="_blank">DIRECTIONS</a>
      <a href="<?= $a['book-now-link'] ?>" target="_blank">BOOK NOW</a>
      <a href="<?= $a['website-link'] ?>" target="_blank">WEBSITE</a>
    </div>

    <?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}

function register_clinic_locations_shortcode()
{
  add_shortcode('clinic_locations', 'clinic_locations_shortcode');
}
?>
