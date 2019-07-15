<div class="layouts">
  
  <?
    // check if the flexible content field has rows of data
    if( have_rows('content') ):
    
        // loop through the rows of data
      while ( have_rows('content') ) : the_row();
    
        if( get_row_layout() == 'image_and_text' ):
    
          $alignment = get_sub_field('alignment');
          $image = get_sub_field('image');
          $content = get_sub_field('content');
          $link = get_sub_field('link');
          $class = "image-text-row image-text-row--" . $alignment;
  ?>
  
    <div class="<? echo $class; ?>">
      <img src="<? echo $image; ?>" alt="">
      <div class="image-text-row__text">
        <? echo $content; ?>
        <? if ($link): ?>
          <a class="row-link" href="<? echo $link['url']; ?>"
          target="<? echo $link['target'] ? $link['target'] : '_self'; ?>">
          <? echo $link['title']?>
          </a>
        <? endif; ?>
      </div>
    </div>
  
  <? elseif( get_row_layout() == 'text' ): ?>

    <div class="layout--text">
      <div class="layout-text-container">
        <? the_sub_field('content'); ?>
      </div>
    </div>

  <? elseif( get_row_layout() == 'slider' ): ?>

    <?php get_template_part('partials/slider'); ?>

  <?
      endif;
    endwhile;
  endif;
  ?>
</div>