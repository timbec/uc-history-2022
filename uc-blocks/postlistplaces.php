<section class="places-list list">
    <h2>Latest Places</h2>
    <ul class="list__container">
         <?php 
    
    $placesWidget = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'places',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($placesWidget->have_posts()) {
        $placesWidget->the_post(); ?>
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