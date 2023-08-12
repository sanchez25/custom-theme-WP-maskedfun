<?php get_header('single'); ?>

    <section class="main-content">
        <div class="container">
            <div class="page-top">
                <?php
                    $category = get_the_category();
                ?>
                <a href="<?php echo get_category_link($category[0]->cat_ID); ?>" class="post-category-btn">
                    <div class="category-icon"></div>
                    <?php echo $category[0]->cat_name; ?>
                </a>
                <span class="post-date"><?php echo get_the_date('j F Y'); ?></span>
            </div>
             <div class="page-title">
                <h1 class="category-title"><?php echo the_title(); ?></h1>
             </div>
             <div class="page-content">
                <?php echo the_content(); ?>
             </div>
             <div class="page-images-block">
                <!--<span class="page-icons-title">Поделиться:</span>
                <a href="#" aria-label="VK" class="vk-icon"></a>
                <a href="#" aria-label="Twitter" class="twitter-icon"></a>
                <a href="#" aria-label="Telegram" class="telegram-icon"></a>-->
             </div>
        </div>
    </section>

<?php get_footer(); ?>
