<?php // Page to display all website's posts, filtered by criteria like category, tag, date, or author that a user clicked on ?>
<?php get_header(); ?>


<main class="container mt-3" id="main">
    <h1 class="text-center mb-4">Queried Posts</h1>

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
        ?>

    </div>

    <?php the_posts_pagination(); ?>

</main>

<?php get_footer(); ?>
