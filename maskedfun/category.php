<?php get_header()?>

    <?php
        $category = get_queried_object();
        $current_cat_id = $category->term_id;
        $current_cat_name = $category->name;
    ?>
    <section class="main-content">
        <div class="container">
            <div class="page-title">
                <h1 class="category-title"><?php echo $current_cat_name; ?></h1>
            </div>
            <?php
                $wp_query = new WP_Query( array(
                  'post_type' => 'post',
                  'posts_per_page' => 6,
                  'cat' => $current_cat_id,
                  'orderby'=> 'date'
                ));
            ?>
            <?php if ( have_posts() ) : ?>
                <div class="posts-items">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="post-item">
                            <a href="<?php echo the_permalink(); ?>" class="post-link">
                                <div class="post-top">
                                    <?php echo the_post_thumbnail(); ?>
                                </div>
                                <div class="post-bottom">
                                    <div class="banner-icon post"></div>
                                    <span class="post-title"><?php echo the_title(); ?></span>
                                </div>
                            </a>
                            <span class="category-btn">
                                <div class="category-icon"></div>
                                <?php echo $current_cat_name; ?>
                            </span>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_query();?>
        </div>
    </section>

<?php get_footer()?>
