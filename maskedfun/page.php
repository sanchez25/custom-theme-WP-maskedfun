<?php get_header()?>

<section class="main-content">
    <div class="container">
        <div class="page-title">
            <h1 class="category-title"><?php echo the_title(); ?></h1>
        </div>
        <div class="page-content">
            <?php echo the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer()?>





