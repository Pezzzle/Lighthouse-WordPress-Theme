<?php
  $post = get_page_by_title('Team');

  // Setup postdata so the_content() will work outside the loop. Don't need to
  // wp_reset_postdata() because the loop doesn't need to keep going after this
  setup_postdata($post);

?>

<?php get_header(); ?>

<main>

    <?php include(locate_template('src/template_parts/hero.php')) ?>

	<section class="o-container-section o-container-section--bordered">
	    <?php include(locate_template('src/template_parts/block_team_list.php')) ?>
	</section>

	<section class="o-container-section o-container-section--bordered content-grid">
     <?= the_content() ?>
	</section>

</main>

<?php get_footer(); ?>

