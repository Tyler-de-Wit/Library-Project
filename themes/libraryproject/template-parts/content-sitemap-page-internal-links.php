<?php 
    // Get the slug of the current post to be used in the path for its icon

    global $post;
    $current_posts_slug = $post->post_name;
?>

<div class="col">

    <div class="text-center">

        <?php
            // Output the image from the media library using our custom function
        
            $image_url = get_image_url_from_slug( $current_posts_slug . '-icon' );
            if ( $image_url ) {
                echo '<img src="' . esc_url( $image_url ) . '" alt="' . $current_posts_slug . '-icon' . '" width="29">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/document-icon.png' . '" alt="Document Icon" width="29">';
            }
        ?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    </div>
    
</div>
