<section class="places-list">
    <h2>Latest Places</h2>

    <?php 
    
    $placesWidget = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'places',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($placesWidget->have_posts()) {
        $placesWidget->the_post(); ?>
        <li>
        <img src="<?php the_post_thumbnail(); ?>" alt="" />
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        </li>
        
        
    <?php } ?>
</section>