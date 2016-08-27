<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <?php
        $image = get_field('header_logo');
        if(!empty($image))
          echo '<img src="' . get_field('header_logo')['url'] . '" />';
        else
          bloginfo('name');
      ?>
    </a>

    <div class="contact">
      <div>Contattaci</div>
      <div class="number"><?php the_field('contact_phone'); ?></div>
    </div>

  </div>
</header>
