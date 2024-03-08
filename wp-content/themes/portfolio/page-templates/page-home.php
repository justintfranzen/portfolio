<?php
/*
 *
 * Template Name: Home
 * Description: Divi Page Template.
 *
 */

global $post;
get_header();
?>

<div class="hero-section left"></div>
<div class="hero-section right"></div>

<div class="intro-section">
<div class="info">
     <h1><?= the_field('name') ?></h1>
     <hr>
   <h3><?= the_field('description') ?></h3>
       <div class="nav">
        <ul>
            <li class="work-section">EXPLORE PROJECTS <i class="fa-light fa-arrow-right-long"></i></li>
        </ul>
    </div>

</div>
</div>
<div class="hero-section">
  
</div>

<div class="projects">
<?php // Check rows exists.

if (have_rows('project')):
  // Loop through rows.
  while (have_rows('project')):
    the_row();

    $image = get_sub_field('project_image');

    echo '<div class="project">';
    if ($image): ?>
    <div class="background-container" style="background-image: url('<?php echo esc_url($image); ?>');">
        <div class="project-background">
           <div class="project-details">
                <p class="project-name"><?php echo get_sub_field('project_name'); ?></p>
                <div class="links">
                    <a href="<?php echo get_sub_field('project_link'); ?>" target="_blank">View Project</a>

                    <?php if (get_sub_field('view_github')) {
                      echo '<a href="' .
                        get_sub_field('view_github') .
                        '" target="_blank" class="view-github">View Github</a>';
                    } ?>
                </div>

            <?php if (get_sub_field('project_information')) {
              echo '<button class="project-information">PROJECT DETAILS</button>';
            } ?>
           </div>
        </div>
    </div>
    <?php endif;
    echo '</div>';

    // Do something, but make sure you escape the value if outputting directly...

    // End loop.
  endwhile;

  // No value.
else:


  // Do something...
endif; ?>
</div>
<?php if (have_rows('project')): ?>
    <?php while (have_rows('project')):
      the_row(); ?>
        <div class="modal">
            <div class="project-information-modal">
                <div class="close-modal"><i class="fa-light fa-xmark"></i></div>
                <?php echo get_sub_field('project_information'); ?>
            </div>
        </div>
    <?php
    endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
