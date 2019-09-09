<?php
  $caseStudySize = 'large';
?>

<?php if (isset($globalCaseStudyIds) && !empty($globalCaseStudyIds)) : ?>

  <section class="o-container-section o-container-section--h-bordered">
    <div class="o-container-link-blocks o-container-link-blocks--flex">
      <?php foreach ($globalCaseStudyIds as $caseStudyId) : ?>
        <?php include(locate_template('src/template_parts/block_case_study.php')) ?>
      <?php endforeach; ?>
    </div>
  </section>

  <?php $globalCaseStudyIds = []; ?>
<?php endif; ?>
