<?php
  $logoSrc = isset($caseStudy['logo']) ? $caseStudy['logo'] : false;
  if ($logoSrc) {
    $logoAlt = get_post_meta($caseStudy['logo_id'], '_wp_attachment_image_alt', true);
    $logoAltAttr = $logoAlt ? 'alt="' . $logoAlt . '"' : '';
    $logoMeta = wp_get_attachment_metadata($caseStudy['logo_id']);
    $logoMask = "-webkit-mask-image: url({$logoSrc}); mask-image: url({$logoSrc}); width: {$logoMeta['width']}px; height: {$logoMeta['height']}px";
  }
  $title = isset($caseStudy['title']) ? $caseStudy['title'] : '';
  $linkText = isset($caseStudy['link_text']) ? $caseStudy['link_text'] : '';
  $linkURL = isset($caseStudy['link_url']) ? $caseStudy['link_url'] : '';
  $bgImg = isset($caseStudy['image_bg_large']) ? $caseStudy['image_bg_large'] : false;
  $bgImgId = $bgImg ? $caseStudy['image_bg_large_id'] : false;
  $fgImgLargeId = isset($caseStudy['image_fg_large_id']) ? $caseStudy['image_fg_large_id'] : false;
  $fgImgSmallId = isset($caseStudy['image_fg_small_id']) ? $caseStudy['image_fg_small_id'] : false;
  $size = isset($caseStudy['size']) ? $caseStudy['size'] : '';
  $sizeClass = $size && $size === 'large' ? 'c-link-block--case-study--large' : 'c-link-block--case-study--small';
?>

<div class="c-link-block c-link-block--case-study <?= $sizeClass ?>">
  <div class="c-link-block__background">
    <?php if ($bgImg) : ?>
      <div class="c-link-block__background-image">
        <?= wp_get_attachment_image($bgImgId, $size = 'link-block-case-study-bg-large') ?>
      </div>
    <?php endif; ?>
    <?php if ($fgImgLargeId) : ?>
      <div class="c-link-block__foreground-image-large">
        <?= wp_get_attachment_image($fgImgLargeId, $size = 'link-block-case-study-fg-large') ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="c-link-block__content">
    <?php if ($logoSrc) : ?>
      <div class="c-link-block__logo"
           style="<?= $logoMask ?>">
      </div>
    <?php endif; ?>
    <?php if ($fgImgSmallId) : ?>
      <div class="c-link-block__foreground-image-small">
        <?= wp_get_attachment_image($fgImgSmallId, $size = 'link-block-case-study-fg-small') ?>
      </div>
    <?php endif; ?>
    <?php if ($title) : ?>
      <h3 class="c-link-block__title">
        <a href="<?= $linkURL  ?>" class="c-link-block__title__link"><?= $title ?></a>
        <span class="c-link-block__title__plain"><?= $title ?></span>
      </h3>
    <?php endif; ?>
    <?php if ($linkText && $linkURL) : ?>
      <a class="c-link-block__link c-button c-button--underlined-dark" href="<?= $linkURL ?>">
        <?= $linkText ?>
      </a>
    <?php endif; ?>
  </div>
</div>