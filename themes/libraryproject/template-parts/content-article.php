
<main class="article-main" id="main">
    
    <div class="article-header">

        <div>

            <?php if ( has_post_thumbnail() ): ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Article Header Image" class="article-header-image">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/default-post-thumbnail.jpg'; ?>" alt="Article Header Image" class="article-header-image">
            <?php endif; ?>

            <h1 class="article-header-title"><?php echo get_the_title(); ?></h1>

        </div>

        <p class="article-header-updated-date">Posted On <?php the_date(); ?></p>

        <p class="article-header-comments-number">
            <?php 

                if (get_comments_number() == 1) {
                    echo '<a href="#comments-section">1 Comment</a>';
                } else {
                    echo '<a href="#comments-section">' . get_comments_number() . ' Comments</a>';
                }

            ?>
        </p>
        
    </div>

    <div class="article-content">

        <?php get_template_part('template-parts/content', 'table-of-contents'); ?>

        <?php the_content(); ?>

    </div>

    <!-- <section class="article-comments" id="comments-section">

        <?php //comments_template(); ?>

    </section> -->

</main>
