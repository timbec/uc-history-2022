<section class="news-list list">
    <h2>Latest News</h2>
    <ul class="list__container">
    <?php 
    
    $newsWidget = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'news',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($newsWidget->have_posts()) {
        $newsWidget->the_post(); ?>
        <li class="list__container--item">
        <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        </li>
        
        
    <?php } ?>
    </ul>
</section>