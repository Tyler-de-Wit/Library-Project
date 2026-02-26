
<div class="card">

    <div class="card-header">

        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="card-img-top" alt="Blog Post Thumbnail">

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
