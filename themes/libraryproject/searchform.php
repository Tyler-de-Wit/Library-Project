<?php // Template for the WordPress search form ?>

<form role="search" method="get" id="searchform" class="search-form mb-3" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <label class="screen-reader-text" for="s">Search for:</label>
    <input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Search for a page" />
    <input type="submit" id="searchsubmit" value="Submit" />
</form>
