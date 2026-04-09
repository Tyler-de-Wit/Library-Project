
<div class="card">

    <div class="card-header">

        <?php if ( has_post_thumbnail() ): ?>
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="card-img-top mb-2 mt-2" alt="Blog Post Thumbnail" height="250" width="auto">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/default-post-thumbnail.jpg'; ?>" class="card-img-top mb-2 mt-2" alt="Blog Post Thumbnail" height="250" width="auto">
        <?php endif; ?>

        <a href="<?php the_permalink(); ?>" class="text-reset text-decoration-none">
            <h2 class="card-title"><?php the_title(); ?></h2>
        </a>

    </div>
    
    <div class="card-body">

        <p class="card-text">
            <div>
                <i class="bi bi-calendar me-1"></i><?php echo get_the_date(); ?>
            </div>
            <div>
                <i class="bi bi-chat me-1"></i><?php echo comments_number(); ?>
            </div>
            <div>
                <i class="bi bi-tags me-1"></i><?php echo the_tags(); ?>
            </div>
        </p>

        <p class="card-text"><?php echo get_the_excerpt(); ?></p>

        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>

    </div>

</div>
