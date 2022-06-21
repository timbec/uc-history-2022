<?php

if (!$attributes['imgURL']) {
  $attributes['imgURL'] = get_theme_file_uri('/images/uraniumcity-5.jpg');
}

?>
<h1>This is the uc-blocks/banner.php</h1>

<div class="front-page-banner">
      <div class="front-page-banner__image" style="background-image: url('<?php echo $attributes['imgURL'] ?>')"></div>
      <div class="front-page-banner__content container t-center c-white">
        <?php echo $content; ?>
      </div>
    </div>