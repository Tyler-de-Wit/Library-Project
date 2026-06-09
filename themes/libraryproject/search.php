<?php // Page to display search forms results ?>
<?php get_header(); ?>


<main class="container mt-3" id="main">
    <h1 class="text-center mb-4">Search Results</h1>

    <div class="row">

        <?php
        if(have_posts()) {
            
            while(have_posts()) { 
                ?>

                <div class="col-12 col-lg-6 mb-4">

                    <?php the_post(); ?>
                    <?php get_template_part('template-parts/content', 'archive'); ?>

                </div>

                <?php
            }
        }

        if(!have_posts()) {
            ?>

            <p class="text-center fs-5">Sorry, your query didn't match any pages. Try visiting our <a href="<?php echo get_home_url(); ?>/sitemap">Sitemap</a> to find the page you are looking for.</p>

            <?php
        }
        ?>

    </div>

    <?php the_posts_pagination(); ?>

</main>

<?php get_footer(); ?>
