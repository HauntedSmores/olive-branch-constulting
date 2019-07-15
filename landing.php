<?php /* Template Name: Landing */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_header(); ?>

<? if (get_field('hero_enabled')): ?>
  <div class="landing-hero">
    <?php
      $hero_image = get_field('hero_image');
      $hero_title = get_field('hero_title');
      $hero_tagline = get_field('hero_tagline');
      $hero_link = get_field('hero_link');
    ?>
    <img class="landing-hero__image" src="<?php echo $hero_image; ?>" alt="">
    <div class="landing-hero__content">
      <h1 class="mega">
        <?php echo $hero_title; ?>
      </h1>
      <p><?php echo $hero_tagline; ?></p>
    </div>
  </div>
<? endif; ?>

<div class="landing-content">

  <?php get_template_part('partials/layouts'); ?>

</div>

<?php get_footer(); ?>

<?php wp_footer(); ?>

</body>

</html>
