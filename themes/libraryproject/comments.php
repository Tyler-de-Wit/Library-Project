<?php // Page to display the comments for the specific post ?>

<div class="comments-header">
    
    <h2>

        <?php
    
            if(!have_comments()) {
                echo "Comments";
            } else if (get_comments_number() == 1) {
                echo "1 Comment";
            } else {
                echo get_comments_number() . " Comments";
            }
    
        ?>

    </h2>

</div>

<div class="comments-content">

    <?php

        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style'       => 'div',
            )
        ); 

    ?>

</div>

<div class="comments-form">

    <?php 

        if(comments_open()) {

            comment_form(
                array(
                    'class_form'         => '',
                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                    'title_reply_after'  => '</h2>',
                )
            );

        } 

    ?>

</div>
