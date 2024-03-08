<?php
require_once 'sub-menu-description.php';
require_once 'custom-button.php';
require_once 'featured-reads.php';
require_once 'clinic-locations.php';
require_once 'contact-us.php';

function mml_register_shortcodes()
{
  register_sub_menu_description_shortcode();
  register_custom_button_shortcode();
  register_featured_reads_shortcode();
  register_clinic_locations_shortcode();
  register_contact_us_shortcode();
}
add_action('init', 'mml_register_shortcodes');
