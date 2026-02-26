
<footer class="ps-4 pe-4 pb-1 container-fluid">
    <div class="row justify-content-center">
        <!-- Quick Links -->
        <section class="col-12 col-lg-4 mt-3">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                <li><a href="frequently-asked-questions">FAQ</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="sitemap">Sitemap</a></li>
            </ul>
        </section>
        <!-- Contacts -->
        <section class="col-12 col-lg-4 mt-3">
            <h2>Contacts</h2>
            <ul>
                <li><i class="bi bi-envelope me-2"></i>Email: library@tafe.wa.edu.au</li>
                <li><i class="bi bi-telephone me-2"></i>Phone: 1300 300 822</li>
                <li><i class="bi bi-geo-alt me-2"></i>Location: 25 Aberdeen St, Perth WA 6000</li>
            </ul>
        </section>
    </div>
    <div class="row justify-content-center">
        <!-- Search -->
        <section class="col-12 col-lg-4 mt-3">
            <h2>Search</h2>
            <?php get_search_form(); ?>
        </section>
        <!-- Accessibility Features -->
        <section class="col-12 col-lg-4 mt-3 mb-3 accessibility-features">
            <h2>Accessibility Features</h2>
            <!-- Font Size Buttons -->
            <div class="row">
                <button class="btn btn-font-size col-4" type="button" id="increase-font-size-button">Increase Font Size</button>
                <button class="btn btn-font-size col-4" type="button" id="decrease-font-size-button">Decrease Font Size</button>
                <button class="btn btn-font-size col-4" type="button" id="reset-font-size-button">Reset Font Size</button>
            </div>

            <!-- Contrast Buttons -->
            <div class="row">
                <button class="btn btn-contrast col-4" type="button" id="light-mode-button">Light Mode</button>
                <button class="btn btn-contrast col-4" type="button" id="dark-mode-button">Dark Mode</button>
                <button class="btn btn-contrast col-4" type="button" id="decrease-contrast-button">Reset Contrast</button>
            </div>

            <!-- Border Buttons -->
            <div class="row">
                <button class="btn btn-borders col-4" type="button" id="add-borders-button">Add Borders</button>
                <div class="col-4"></div>
                <button class="btn btn-borders col-4" type="button" id="remove-borders-button">Remove Borders</button>
            </div>
        </section>
    </div>
    <!-- Copyright Statement -->
    <div class="mt-3 p-2">
        <p class="text-center">Copyright 2025 Library Project Team, All Rights Reserved.</p>
    </div>
</footer>
    
<?php wp_footer(); ?>

</body>
</html>
