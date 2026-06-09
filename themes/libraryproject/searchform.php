<?php // Template for the WordPress search form ?>

<form role="search" method="get" id="searchform" class="search-form mb-3" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <label class="search-form-label" for="s">Search this website:</label><br>
    <input class="search-form-input" type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Enter search here" />
    <input class="search-form-button" type="submit" id="searchsubmit" value="Submit" />
</form>
