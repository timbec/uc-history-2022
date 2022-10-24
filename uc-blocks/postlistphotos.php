<section class="photos-list list">
    <h2>Latest Photos</h2>
    <ul class="list__container">
    <?php 
    
    $photosWidget = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'photos',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($photosWidget->have_posts()) {
        $photosWidget->the_post(); ?>
        <li class="list__container--item">
       <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        </li>
        
        
    <?php } ?>
    </ul>
</section>