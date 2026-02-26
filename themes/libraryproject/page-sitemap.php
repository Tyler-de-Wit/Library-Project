<?php get_header(); ?>


<main id="main" class="main-sitemap-page container">
    <h1 class="text-center mt-2">Sitemap</h1>

    <!-- Internal Links -->
    <h2 class="animateLeft">Internal Links</h2>
    <nav class="internal-links container py-3 mb-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frequently-asked-questions-icon.png" alt="Question Icon">
                    <a href="frequently-asked-questions">Frequently Asked Questions</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-icon.png" alt="Mail Icon">
                    <a href="contact">Contact</a>
                </div>
            </div>

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
                    
                    while( $the_query->have_posts() ):

                        $the_query->the_post();
                        
                        get_template_part('template-parts/content', 'sitemap-page-internal-links'); 

                    endwhile; 

                endif;

            ?>

        </div>
    </nav>

    
    <!-- External Links -->
    <h2 class="animateLeft">External Links</h2>
    <div class="external-links p-3 mb-5">        
        <div class="row row-cols-2 g-4">
            <!-- Row 1 -->
            <div class="col">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blackboard-icon.png" alt="Person Icon">
                    <a href="https://help.blackboard.com/" target="_blank">Blackboard Help</a>
                </div>
            </div>
            <div class="col">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wifi-icon.png" alt="WiFi Icon">
                    <a href="http://neverssl.com/" target="_blank">NMT WiFi login page</a>
                </div>
            </div>
            
            <!-- Row 2 -->
            <div class="col">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blackboard-icon.png" alt="Person Icon">
                    <a href="https://help.blackboard.com/Collaborate/Ultra/Participant" target="_blank">Collaborate Help For Students</a>
                </div>
            </div>
            <div class="col">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wifi-icon.png" alt="WiFi Icon">
                    <a href="https://northmetrotafe.libanswers.com/faq/269162" target="_blank">How do I login to the Campus WiFi?</a>
                </div>
            </div>
            
            <!-- Row 3 -->
            <div class="col">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pen-icon.png" alt="Pen Icon">
                    <a href="https://www.mybib.com/tools/apa-citation-generator" target="_blank">APA Citation Generator</a>
                </div>
            </div>
            <div class="col">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printers-icon.png" alt="Printer Icon">
                    <a href="https://northmetrotafe.libanswers.com/faq/277356" target="_blank">Print using your own device with Mobility Print</a>
                </div>
            </div>
            
            <!-- Row 4 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pen-icon.png" alt="Pen Icon">
                    <a href="https://guides.dtwd.wa.gov.au/nmtafe-apa" target="_blank">APA Referencing Guide</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printers-icon.png" alt="Printer Icon">
                    <a href="https://northmetrotafe.libanswers.com/faq/264857" target="_blank">How do I print, photocopy or scan?</a>
                </div>
            </div>
            
            <!-- Row 5 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/timetable-icon.png" alt="Timetable Icon">
                    <a href="https://www.northmetrotafe.wa.edu.au/timetables" target="_blank">North Metropolitan Tafe Timetables</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printers-icon.png" alt="Printer Icon">
                    <a href="https://print.nmtafe.wa.edu.au/user" target="_blank">PaperCut MF</a>
                </div>
            </div>
            
            <!-- Row 6 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graduation-icon.png" alt="Graduation Icon">
                    <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/newstudents" target="_blank">New Students</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/globe-icon.png" alt="Globe Icon">
                    <a href="https://guides.dtwd.wa.gov.au/az/northmetro" target="_blank">Online Resources</a>
                </div>
            </div>
            
            <!-- Row 7 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studentportal-icon.png" alt="Student Portal Icon">
                    <a href="https://nmtafe.t1cloud.com/T1Default/CiAnywhere/web/NMTAFE/LogOn/$S1_STU" target="_blank">Student Portal</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-icon.png" alt="Mail Icon">
                    <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank">Contact information for every campus library</a>
                </div>
            </div>
            
            <!-- Row 8 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://login.microsoftonline.com/" target="_blank">Login To Microsoft 365</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://passwordreset.microsoftonline.com" target="_blank">Reset your Microsoft password</a>
                </div>
            </div>

            <!-- Row 9 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://support.microsoft.com/en-us/microsoft-365" target="_blank">Microsoft Support</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://northmetrotafe.libanswers.com/faq/269161" target="_blank">FAQ How do I access my Microsoft 365 / Student Email?</a>
                </div>
            </div>

            <!-- Row 10 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://apps.apple.com/au/app/microsoft-authenticator/id983156458" target="_blank">Download Microsoft authenticator for Apple</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://play.google.com/store/apps/details?id=com.azure.authenticator&hl=en_AU" target="_blank">Download Microsoft authenticator for Android</a>
                </div>
            </div>
            
            <!-- Row 11 -->
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft-365-icon.png" alt="Computer Icon">
                    <a href="https://northmetrotafe.libanswers.com/faq/275738" target="_blank">MFA and Microsoft365 Setup in Languages Other than English</a>
                </div>
            </div>
            <div class="col hidden-elements hidden">
                <div class="button-icon-navigation text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/document-icon.png" alt="Document  Icon">
                    <a href="https://guides.dtwd.wa.gov.au/nmtafe-library" target="_blank">Library Services</a>
                </div>
            </div>

            <!-- WordPress Dynamic Links -->
            <?php
                // if (is_active_sidebar( 'widget-sitemap-page-external-links' )) {
                //     dynamic_sidebar( 'widget-sitemap-page-external-links' ); 
                // }
            ?>
        </div>
    </div>

    <!-- PDF Document Links -->
    <h2 class="animateLeft">Links To PDF Resources</h2>
    <div class="links-to-pdf-documents p-3 mb-5">
        <ul>
            <?php
                if (is_active_sidebar( 'widget-sitemap-page-pdf-resources' )) {
                    dynamic_sidebar( 'widget-sitemap-page-pdf-resources' ); 
                }
            ?>
        </ul>
    </div>

</main>


<?php get_footer(); ?>
