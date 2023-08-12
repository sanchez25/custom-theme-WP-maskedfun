<?php /*Template Name: Main*/ ?>

<?php get_header()?>

<section class="main-content">
    <div class="container">
        <div class="page-title">
            <h1 class="main-title"><?php echo the_title(); ?></h1>
        </div>
        <?php get_template_part('templates/posts'); ?>
        <?php get_template_part('templates/template-banner'); ?>
    </div>
</section>

<?php get_footer()?>





