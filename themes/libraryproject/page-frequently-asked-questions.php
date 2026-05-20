<?php get_header(); ?>

<main id="main">
    <h1 class="mb-5 text-center">Frequently Asked Questions</h1>

    <div class="container mt-5">
        <div class="row">

            <!-- FAQ Microsoft -->
            <div class="col-xl-6 col-sm-12 mb-5">
                <h2 class="animateLeft"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/microsoft-365-icon.png" alt="Computer Icon" class="me-2 mb-1">Microsoft 365 FAQ</h2>
                <div class="accordion" id="accordionPanelsStayOpenMicrosoft">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne1">
                                What is the activation time for my account?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne1" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <p>Activation Time: It takes 24-48 hours after enrolment for your account to work.</p>
                                <p>Login Portal: <a href="https://login.microsoftonline.com">login.microsoftonline.com</a></p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/microsoft-365' ); ?>">Getting Started With Microsoft 365</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo1" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo1">
                                What are my login credentials?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Username: StudentIDNumber@tafe.wa.edu.au (e.g., 20001234@tafe.wa.edu.au)</p>
                                <p>Default Password: Your default password (unless you have already changed it).</p>
                                <p>Default Password Format: tafewa + your date of birth (DDMMYYYY) (e.g., tafewa14092006)</p>
                                <p>Returning Students: Use your existing password. Reset it <a href="https://passwordreset.microsoftonline.com/">here</a>  if forgotten.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/microsoft-365' ); ?>">Getting Started With Microsoft 365</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree1" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree1">
                                Important Account Information?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Account Deletion: Your account is permanently deleted 85 days after you finish or withdraw.</p>
                                <p>Backup Your Data: Move your files to a personal drive before this deadline; they cannot be recovered later.</p>
                                <p>Blackboard: Access may be cut off immediately upon withdrawal.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/microsoft-365' ); ?>">Getting Started With Microsoft 365</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Passwords -->
            <div class="col-xl-6 col-sm-12 mb-5">
                <h2 class="animateRight"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/passwords-icon.png" alt="Passwords Icon" class="me-2 mb-1">Passwords FAQ</h2>
                <div class="accordion" id="accordionPanelsStayOpenPasswords">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne2">
                                How do I change my password?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <p>You can update your password through two main methods:</p>
                                <p>Microsoft 365: Go to Settings (cog icon) → Change password.</p>
                                <p>Authenticator App: Select your TAFE account → Change password.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/passwords' ); ?>">TAFE Passwords</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo2" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo2">
                                Can I reset my password?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>If you are locked out, reset it yourself:</p>
                                <p>Go to the <a href="https://login.microsoftonline.com/">Microsoft Sign-in page</a>.</p>
                                <p>Select Can't access your account → Work or school account.</p>
                                <p>Enter your student email and complete the security verification (SMS, email, or Authenticator).</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/passwords' ); ?>">TAFE Passwords</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree2" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree2">
                                I need further assistance?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>If your default password does not work or you need help with any of the above:</p>
                                <p>Please contact the college on <a href="tel:1300 300 822">1300 300 822</a></p>
                                <p>Or call or drop in to one of the <a href="https://guides.dtwd.wa.gov.au/nmtafe-library/ContactUs" target="_blank" rel="noreferrer noopener">Campus Libraries</a></p>
                                <p>Note: Passwords cannot be changed via chat or email by Client Services or Library staff.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/passwords' ); ?>">TAFE Passwords</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Wi-Fi -->
            <div class="col-xl-6 col-sm-12 mb-5">
                <h2 class="animateLeft"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/wifi-icon.png" alt="WiFi Icon" class="me-2 mb-1">Wi-Fi FAQ</h2>
                <div class="accordion" id="accordionPanelsStayOpenWiFi">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne3" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne3">
                                How do I connect to the Wi-Fi Network?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne3" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <p>iOS - Settings > WiFi > NMT WiFi</p>
                                <p>Android - Settings > Network & Internet > WiFi > NMT WiFi</p>
                                <p>Windows - Click on the WiFi logo on the bottom right hand corner of the screen and select NMT WiFi</p>
                                <p>MacOS - Click on the WiFi logo on the Menu bar, and select NMT WiFi from the list</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/wifi' ); ?>">Login To Tafe Campus Wi-Fi</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo3" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo3">
                                Whats my login credentials for the Wi-Fi?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Username: Student ID Number</p>
                                <p>Password: Your Password (remember, you must change the default password first!)</p>
                                <p>Once you have logged in, you will not need to log in again for 90 days. However, you will need to log in again if you change your password during this time. If you have any issues connecting to the WiFi, take your device to your campus Library for assistance.</p>
                                <p>Warning: If you are running a Bit Torrent when you try to log in to the WiFi your device will be quarantined and you will not be able to log in.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/wifi' ); ?>">Login To Tafe Campus Wi-Fi</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree3" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree3">
                                What happens when my password expires?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Your password will expire every 6 months - you MUST change it before it expires or you will be locked out of all our online systems.</p>
                                <p>You can change your password on a Student PC by using CTRL+ALT+DELETE and choosing Change a Password.</p>
                                <p>Or via the settings in Microsoft 365 (student email) - click on the settings cog in the top right hand corner of your Microsoft 365 account and choose change your password.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/wifi' ); ?>">Login To Tafe Campus Wi-Fi</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Blackboard -->
            <div class="col-xl-6 col-sm-12 mb-5">
                <h2 class="animateRight"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blackboard-icon.png" alt="Person Icon" class="me-2 mb-1">Blackboard FAQ</h2>
                <div class="accordion" id="accordionPanelsStayOpenBlackboard">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne4" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne4">
                                How do I login to Blackboard?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne4" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <p>First visit <a href="https://blackboard.northmetrotafe.wa.edu.au/">Login to Blackboard</a></p>
                                <p>Username: Your student email address</p>
                                <p>Password: Your Password</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/blackboard' ); ?>">Accessing Blackboard</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo4" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo4">
                                Where can I find my units?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Once logged into Blackboard, select Courses from the navigation menu on the left hand side.</p>
                                <p>Select the unit name from the list of courses to show the contents of that unit.</p>
                                <p>Be sure to read any orientation material for your units.</p>
                                <p>If some of your units appear to be missing, contact your lecturer.</p>
                                <p>Please note, some units may not appear until you start your first class.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/blackboard' ); ?>">Accessing Blackboard</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree4">
                                Important Information?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>It may take up to 24-48 hours after completing your enrolment for your account to become active in all our online systems.</p>
                                <p>Before you can login to Blackboard, you will need to have set up Microsoft 365 account. A link to instructions about how to do this can be found at the bottom of this FAQ.</p>
                                <hr>
                                <p>Make sure to visit our <a href="<?php echo home_url( '/blackboard' ); ?>">Accessing Blackboard</a> page for more detailed information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>
