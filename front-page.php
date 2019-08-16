<?php get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>

    <?php include(locate_template('src/template_parts/hero.php')) ?>

    <?php $globalBlocksServiceGroup = getPostMeta('blocks_service_group') ?>
    <?php $globalBlocksServiceGrid = getPostMeta('blocks_service_grid_setting') ?>
    <?php include(locate_template('src/template_parts/block_section_service_grid.php')) ?>

    <?php include(locate_template('src/template_parts/contact_us_banner.php')) ?>

    <?php $globalBlocksCaseStudy = getPostMeta('blocks_case_study_large_group') ?>
    <?php include(locate_template('src/template_parts/block_section_case_study_large.php')) ?>

    <div class="placeholder" style="height: 200px;"></div>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>