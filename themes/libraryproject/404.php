<?php // Page to display when "error404" occurs ?>
<?php get_header(); ?>


<!-- Main -->
<main class="404-main container mt-3 text-center" id="main">
    <noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
    <button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <h1 class="mb-5 text-center">404 Not Found</h1>
    
    <p>This page isn't in our library</p>
    <p>We searched the archives, the returns, even under the librarian's desk with no luck. Maybe the Dewey Decimal System misplaced it.</p>
    <p>Try visiting our <a href="frequently-asked-questions">Frequently Asked Questions</a> you might find your answer there.</p>
    <p>Or ask our chatbot what you are looking for.</p>

    <?php get_search_form(); ?>
</main>


<?php get_footer(); ?>
