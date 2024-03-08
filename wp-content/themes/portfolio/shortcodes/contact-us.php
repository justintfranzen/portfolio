<?php
function contact_us_shortcode($atts)
{
  // Shortcode attributes.
  $a = shortcode_atts(
    [
      'phone' => 'phone',
      'address' => 'address',
      'city' => 'city',
      'state' => 'state',
      'zip' => 'zip',
      'facebook-link' => 'facebook',
      'instagram-link' => 'instagram',
      'linkedin-link' => 'linkedin',
      'youtube-link' => 'youtube',
    ],
    $atts,
  );
  ob_start();
  ?>

    <div class="contact-us">
      <p class="label">Phone</p>
      <p class="phone"><a href="<?= $a['phone'] ?>"><?= $a['phone'] ?></a></p>
       <p class="label">Address</p>
       <div class="address">
         <p><?= $a['address'] ?></p>
         <?= $a['city'] ?>,
         <?= $a['state'] ?>,
         <?= $a['zip'] ?>
     </div>
    </div>


    <div class="contact-socials">
      <p class="label">Socials</p>
      <div class="socials">
      <a href="<?= $a['facebook-link'] ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="<?= $a['instagram-link'] ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="<?= $a['linkedin-link'] ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="<?= $a['youtube-link'] ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    </div>
  </div>

    <?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}

function register_contact_us_shortcode()
{
  add_shortcode('contact_us', 'contact_us_shortcode');
}
?>
