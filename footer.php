<footer id="footer">

<div class="footer-addresses">
  <?php

    $addresses = get_field('addresses', 'options');

    if($addresses):
      foreach($addresses as $address): ?>

        <div class="footer-address">
          <h4><?php echo $address['name'] ?></h4>
          <p class="footer-address"><?php echo $address['address'] ?></p>
        </div>

  <?php
      endforeach;
    endif;
  ?>
</div>

<div class="footer-info">
  <p><strong>Phone:</strong> <?php the_field('phone', 'options'); ?></p>
  <p><?php the_field('store_hours', 'options'); ?></p>
</div>


  <!-- <div id="copyright">
    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?>
    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
  </div> -->
</footer>