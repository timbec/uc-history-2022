<section class="writing-list list">
    <h2>Latest Writing</h2>
    <ul class="list__container">
    <?php 
    
    $writingWidget = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'writing',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($writingWidget->have_posts()) {
        $writingWidget->the_post(); ?>
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