<div class="layout--slider">
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <?
          $slider = get_sub_field('slider');
          $controls = get_sub_field('controls');
          $bullets = get_sub_field('bullets');
          foreach ($slider as $slide):
            $image = $slide['image'];
            $headline = $slide['headline'];
            $text = $slide['text'];
        ?>
        <li class="glide__slide">
          <img src="<?php echo $image; ?>" />
          <div class="slide-content">
            <h2 class="slide-content__headline">
              <?php echo $headline; ?>
            </h2>
            <p class="slide-content__text"><?php echo $text; ?></p>
          </div>
        </li>
        <? endforeach; ?>
      </ul>
    </div>

    <?php if ($bullets): ?>
      <div class="glide__bullets" data-glide-el="controls[nav]">
        <?php foreach ($slider as $index => $slide): ?>
          <button class="glide__bullet" data-glide-dir="=<?php echo $index; ?>"></button>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ($controls): ?>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 451.846 451.846">
            <path fill="currentColor" d="M345.441 248.292L151.154 442.573c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744L278.318 225.92 106.409 54.017c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.287 194.284c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"/>
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 451.846 451.846">
            <path fill="currentColor" d="M345.441 248.292L151.154 442.573c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744L278.318 225.92 106.409 54.017c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.287 194.284c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"/>
          </svg>
        </button>
      </div>
    <?php endif; ?>

  </div>
</div>