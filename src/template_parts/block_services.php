<?php
  $icon = isset($service['icon']) ? $service['icon'] : false;
  $iconID = isset($service['icon_id']) ? $service['icon_id'] : false;
  $iconAlt = isset($iconID) ? get_post_meta($iconID, '_wp_attachment_image_alt', true) : '';
  $title = isset($service['title']) ? $service['title'] : '';
  $desc = isset($service['description']) ? $service['description'] : '';
?>

<div class="c-service-category">

  <?php if ($icon) : ?>
    <div class="c-service-category__icon-container">
      <img class="c-service-category__icon" src="<?= $icon ?>" alt="<?= $iconAlt ?>"/>
    </div>
  <?php endif; ?>

  <?php if ($title) : ?>
    <h2 class="c-service-category__title c-service-template__title">
      <?= $title ?>
    </h2>
  <?php endif; ?>

  <?php if ($desc) : ?>
    <div class="c-service-category__content">
      <?= wpautop($desc) ?>
    </div>
  <?php endif; ?>

</div>
