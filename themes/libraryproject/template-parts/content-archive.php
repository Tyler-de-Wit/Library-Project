
<div class="card">

    <div class="card-header">

        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="card-img-top mb-2 mt-2" alt="Blog Post Thumbnail" height="250" width="auto">

        <a href="<?php the_permalink(); ?>" class="text-reset text-decoration-none">
            <h2 class="card-title"><?php the_title(); ?></h2>
        </a>

    </div>
    
    <div class="card-body">

        <p class="card-text"><i class="bi bi-calendar me-1"></i><?php echo get_the_date(); ?></p>

        <p class="card-text"><?php echo get_the_excerpt(); ?></p>

        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>

    </div>

</div>
