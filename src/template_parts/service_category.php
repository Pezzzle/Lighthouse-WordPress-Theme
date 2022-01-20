<?php
  $icon = isset($service['icon']) ? $service['icon'] : false;
  $iconID = isset($service['icon_id']) ? $service['icon_id'] : false;
  $iconAlt = isset($iconID) ? get_post_meta($iconID, '_wp_attachment_image_alt', true) : '';
  $title = isset($service['title']) ? $service['title'] : '';
  $desc = isset($service['description']) ? $service['description'] : '';
  $linkText = isset($service['link_text']) ? $service['link_text'] : '';
  $linkURL = isset($service['link_url']) ? $service['link_url'] : '';
?>

<?php if ($linkText && $linkURL) : ?>
  <a href="<?= $linkURL ?>" class="c-service-category">
<?php else : ?>
  <div class="c-service-category">
<?php endif; ?>

  <?php if ($icon) : ?>
    <div class="c-service-category__icon-container">
      <img class="c-service-category__icon" src="<?= $icon ?>" alt="<?= $iconAlt ?>"/>
    </div>
  <?php endif; ?>

  <?php if ($title) : ?>
    <h3 class="c-service-category__title c-service-template__title">
      <?= $title ?>
    </h3>
  <?php endif; ?>

  <?php if ($desc) : ?>
    <div class="c-service-category__content">
      <?= wpautop($desc) ?>
    </div>
  <?php endif; ?>

  <?php if ($linkText && $linkURL) : ?>
    <div class="c-service-block__link c-button c-button--underlined-dark">
      <?= $linkText ?>
    </div>
  <?php endif; ?>

<?php if ($linkText && $linkURL) : ?>
  </a>
<?php else : ?>
  </div>
<?php endif; ?>
