<section class="news-list">
    <h2>Latest News</h2>

    <?php 
    
    $newsWidget = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'news',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($newsWidget->have_posts()) {
        $newsWidget->the_post(); ?>
        <li>
        <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        </li>
        
        
    <?php } ?>
</section>