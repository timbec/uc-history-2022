<?php

if (!$attributes['imgURL']) {
  $attributes['imgURL'] = get_theme_file_uri('/images/uraniumcity5.jpg');
}

?>


      <div class="hero-slider__slide" style="background-image: url('<?php echo $attributes['imgURL'] ?>')">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay t-center">
            <?php echo $content; ?>
          </div>
        </div>
      </div>
      