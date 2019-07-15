<? if (get_field('hero_enabled')): ?>
  <div class="hero">
    <?php
      $hero_image = get_field('hero_image');
      $hero_title = get_field('hero_title');
      $hero_tagline = get_field('hero_tagline');
      $hero_link = get_field('hero_link');
    ?>
    <img class="hero__image" src="<?php echo $hero_image; ?>" alt="">
    <div class="hero__content">
      <h1>
        <?php echo $hero_title; ?>
      </h1>
      <? if ($hero_tagline): ?>
      <p><?php echo $hero_tagline; ?></p>
      <? endif; ?>
    </div>
  </div>
<? endif; ?>