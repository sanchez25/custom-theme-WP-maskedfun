<div class="posts-block">
    <div class="posts-items">
        <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'posts_per_page' => '6'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while($query->have_posts()) : $query->the_post();
            ?>
                <div class="post-item">
                    <a href="<?php echo get_permalink(); ?>" class="post-link">
                        <div class="post-top">
                            <?php echo the_post_thumbnail(); ?>
                        </div>
                        <div class="post-bottom">
                            <div class="banner-icon post"></div>
                            <span class="post-title"><?php echo get_the_title(); ?></span>
                        </div>
                    </a>
                    <?php
                        $category = get_the_category();
                    ?>
                    <a href="<?php echo get_category_link($category[0]->cat_ID); ?>" class="category-btn">
                        <div class="category-icon"></div>
                        <?php echo $category[0]->cat_name; ?>
                    </a>
                </div>
            <?php
                endwhile;
            }
            ?>
    </div>
    <div class="posts-more">
        <?php
            $published_posts = wp_count_posts()->publish;
        ?>
        <?php if ($published_posts > 6)  {?>
            <button class="more-btn">Показать еще</button>
        <?php } ?>
    </div>
</div>





