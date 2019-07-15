<?php /* Template Name: Work */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_header(); ?>

  <?php get_template_part('partials/hero'); ?>

  <?php get_template_part('partials/layouts'); ?>

  <div class="portfolio">
    <?php
      $portfolio = get_field('portfolio');
      foreach ($portfolio as $item):
        $title = $item['title'];
        $gallery = $item['gallery'];
    ?>

    <div class="portfolio-card" data-modal="<?php echo $title; ?>">
      <img src="<?php echo $gallery[0]['url']; ?>" alt="">
      <h4 class="portfolio-card__title">
        <?php echo $title; ?>
      </h4>
    </div>
  
    <?php endforeach; ?>
  </div>

  <div class="portfolio-modal">
    <?php
      $portfolio = get_field('portfolio');
      foreach ($portfolio as $item):
        $title = $item['title'];
        $description = $item['description'];
        $gallery = $item['gallery'];
    ?>

    <div class="portfolio-details" data-modal="<?php echo $title; ?>">
      <i data-feather="x"></i>
      <h3><?php echo $title; ?></h3>
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <div class="glide__slides">
            <? foreach ($gallery as $image): ?>
              <div class="glide__slide">
                <img data-src="<? echo $image['url']; ?>" alt="">
              </div>
            <? endforeach; ?>
          </div>
        </div>

      </div>
      <? echo $description; ?>
    </div>

    <?php endforeach; ?>
  </div>

  <?php get_footer(); ?>

  <?php wp_footer(); ?>

</body>

</html>
