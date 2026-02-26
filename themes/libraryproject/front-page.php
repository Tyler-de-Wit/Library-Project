<?php get_header(); ?>


<main id="main" class="main-home-page">
    <h1 class="text-center mt-2 animateTop">Student Essentials</h1>

    <nav class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">

            <?php

                // Arguments For Query
                $args = array(
                    'posts_per_page' => -1,     // Overwrites the posts per page set in WordPress settings to allow all posts on one page
                    'post_type'      => 'post',
                    'order'          => 'ASC',
                    'orderby'        => 'date',
                );

                // Posts Query
                $the_query = new WP_Query( $args );

                // WP Loop
                if( $the_query->have_posts() ):
                    
                    $counter = 0;
                    
                    while( $the_query->have_posts() ): 
                        $the_query->the_post();

                        if ($counter < 6):

                            get_template_part('template-parts/content', 'home-page-button-navigation-visible'); 
                            
                        else: 
                            
                            get_template_part('template-parts/content', 'home-page-button-navigation-hidden'); 
                            
                        endif;

                        $counter += 1;
                        
                    endwhile; 

                endif;

            ?>

        </div>

        <!-- Show More and Less Buttons -->
        <button class="show-more-button d-flex justify-content-center">Show More<i class="bi bi-arrow-down ms-1"></i></button>
        <button class="show-less-button d-flex justify-content-center hidden">Show Less<i class="bi bi-arrow-up ms-1"></i></button>
    </nav>
</main>


<?php get_footer(); ?>
