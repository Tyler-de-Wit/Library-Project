// -------------------- Change Font Size, Contrast And Borders -------------------- //
const rootElement = document.documentElement;

// Declare arrays for document elements
const htmlElements = ['a', 'abbr', 'address', 'article', 'aside', 'b', 'base', 'bdi', 'bdo', 'blockquote', 'body', 'button', 'caption', 'cite', 'code', 'col', 'colgroup', 'dd', 'details', 'dialog', 'div', 'dl', 'dt', 'em', 'fieldset', 'footer', 'form', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'header', 'hgroup', 'i', 'input', 'ins', 'kbd', 'label', 'legend', 'li', 'main', 'mark', 'menu', 'menuitem', 'meter', 'nav', 'ol', 'optgroup', 'option', 'p', 'pre', 'q', 'rb', 'rp', 'rt', 'rtc', 'ruby', 's', 'section', 'select', 'small', 'span', 'strong', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'textarea', 'tfoot', 'th', 'thead', 'time', 'tr', 'u', 'ul'];
const elements = [];

// Populate element array with document elements
for (let i = 0; i < htmlElements.length; i++) {
    let element = htmlElements[i];
    let selector = document.querySelectorAll(element);
    elements.push(selector);
}

// Test if fontSize has been set already in the session as to not override it from another page if it has not been set then set the session variable to 16 and apply it to the page
const sessionKeyFontSize = sessionStorage.getItem("fontSize");
if (sessionKeyFontSize === null) {
    sessionStorage.setItem("fontSize", 16);

    let fontSize = sessionStorage.getItem("fontSize");
    fontSize = Number(fontSize);
    rootElement.style.fontSize = fontSize + "px";
}


// Function to increase root font size
function increaseFontSize() {
    'use strict'

    let fontSize = sessionStorage.getItem("fontSize");
    fontSize = Number(fontSize);

    if (fontSize < 22) {
        fontSize += 2;
        rootElement.style.fontSize = fontSize + "px";
        sessionStorage.setItem("fontSize", fontSize);
    }
}

// Function to decrease root font size
function decreaseFontSize() {
    'use strict'

    let fontSize = sessionStorage.getItem("fontSize");
    fontSize = Number(fontSize);

    if (fontSize > 10) {
        fontSize -= 2;
        rootElement.style.fontSize = fontSize + "px";
        sessionStorage.setItem("fontSize", fontSize);
    }
}

// Function to reset root font size
function resetFontSize() {
    'use strict'

    sessionStorage.setItem("fontSize", "16");
    rootElement.style.fontSize = "16px";
}


// Function to increase contrast to light mode
function lightMode() {
    'use strict'

    // Set sesion variable to keep state between pages
    sessionStorage.setItem("contrast", "light");

    // Add light mode class to all elements in page
    for (let x = 0; x < elements.length; x++) {
        for (let i = 0; i < elements[x].length; i++) {
            elements[x][i].classList.remove('dark-mode');
            elements[x][i].classList.add('light-mode');
        }
    }
}

// Function to increase contrast to dark mode
function darkMode() {
    'use strict'

    // Set sesion variable to keep state between pages
    sessionStorage.setItem("contrast", "dark");

    // Add dark mode class to all elements in page
    for (let x = 0; x < elements.length; x++) {
        for (let i = 0; i < elements[x].length; i++) {
            elements[x][i].classList.remove('light-mode');
            elements[x][i].classList.add('dark-mode');
        }
    }

    // Change background of hanburger and search buttons back to white so you can see the dark image
    let navbarTogglers = [];
    navbarTogglers = document.querySelectorAll('.navbar-toggler');
    for (let i = 0; i < navbarTogglers.length; i++) {
        navbarTogglers[i].style.setProperty('background-color', '#ffffff', 'important');
    }
}

// Function to reset colour contrast to defaults
function resetContrast() {
    'use strict'

    // Set sesion variable to keep state between pages
    sessionStorage.setItem("contrast", "reset");

    // Remove high contrast class to all elements in page
    for (let x = 0; x < elements.length; x++) {
        for (let i = 0; i < elements[x].length; i++) {
            elements[x][i].classList.remove('light-mode');
            elements[x][i].classList.remove('dark-mode');
        }
    }
}


// Function to add borders to all divs
function addBorders() {
    'use strict'

    // Set sesion variable to keep state between pages
    sessionStorage.setItem("borders", "add");

    // Add contrast border class to all divs and sections on the page
    const divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        
        // Test if the page is in light or dark mode to add the correct border
        if (sessionStorage.getItem("contrast") == "light") {
            divs[i].classList.add('divs-light-mode-border');
        } else if (sessionStorage.getItem("contrast") == "dark") {
            divs[i].classList.add('divs-dark-mode-border');
        } else {
            divs[i].classList.add('divs-light-mode-border');
        }
    }

    const sections = document.querySelectorAll('section');
    for (let i = 0; i < sections.length; i++) {
        // Test if the page is in light or dark mode to add the correct border
        if (sessionStorage.getItem("contrast") == "light") {
            sections[i].classList.add('divs-light-mode-border');
        } else if (sessionStorage.getItem("contrast") == "dark") {
            sections[i].classList.add('divs-dark-mode-border');
        } else {
            sections[i].classList.add('divs-light-mode-border');
        }
    }
}

// Function to remove borders from all divs
function removeBorders() {
    'use strict';

    // Set sesion variable to keep state between pages
    sessionStorage.setItem("borders", "remove");

    // Remove contrast border class to all divs on the page
    const divs = document.querySelectorAll('div');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.remove('divs-light-mode-border');
        divs[i].classList.remove('divs-dark-mode-border');
    }
    
    const sections = document.querySelectorAll('section');
    for (let i = 0; i < sections.length; i++) {        
        sections[i].classList.remove('divs-light-mode-border');
        sections[i].classList.remove('divs-dark-mode-border');
    }
}


// -------------------- Scroll to top of page -------------------- //
// Function to scroll to top of the page
function scrollToTop() {
    'use strict';

    // When the user clicks on the button, scroll to the top of the document
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// -------------------- Show More Elements -------------------- //
// Function to show hidden elements when button clicked
function showMore() {
    'use strict';

    const hiddenElements = document.querySelectorAll('.hidden-elements');
    const showMoreButton = document.querySelector('.show-more-button');
    const showLessButton = document.querySelector('.show-less-button');

    for (let i = 0; i < hiddenElements.length; i++) {
        hiddenElements[i].classList.remove('hidden');
    }

    showMoreButton.classList.add('hidden');
    showLessButton.classList.remove('hidden');
}

// Function to hide hidden elements when button clicked
function showLess() {
    'use strict';

    const hiddenElements = document.querySelectorAll('.hidden-elements');
    const showLessButton = document.querySelector('.show-less-button');
    const showMoreButton = document.querySelector('.show-more-button');

    for (let i = 0; i < hiddenElements.length; i++) {
        hiddenElements[i].classList.add('hidden');
    }

    showLessButton.classList.add('hidden');
    showMoreButton.classList.remove('hidden');
}


// -------------------- Scroll Animations -------------------- //
// When an element with the class ".animateLeft" is within the viewport the class ".fadeInLeft" is added
const targetElementsLeft = document.querySelectorAll(".animateLeft");
const observerLeft = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {

            entry.target.classList.add("fadeInLeft");
        }
    });
}, {
    threshold: 0.5 // Trigger when 50% of the element is visible
});
// Loop through every element and observe it
targetElementsLeft.forEach(element => {
    observerLeft.observe(element); // Observe each element individually
});

// When an element with the class ".animateRight" is within the viewport the class ".fadeInRight" is added
const targetElementsRight = document.querySelectorAll(".animateRight");
const observerRight = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {

            entry.target.classList.add("fadeInRight");
        }
    });
}, {
    threshold: 0.5
});
targetElementsRight.forEach(element => {
    observerRight.observe(element); 
});

// When an element with the class ".animateTop" is within the viewport the class ".fadeInTop" is added
const targetElementsTop = document.querySelectorAll(".animateTop");
const observerTop = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {

            entry.target.classList.add("fadeInTop");
        }
    });
}, {
    threshold: 0.5
});
targetElementsTop.forEach(element => {
    observerTop.observe(element);
});


// -------------------- Event Listeners and Default Behaviour -------------------- //
function init() {
    'use strict';
    
    // -------------------- Scroll to top of page -------------------- //
    // Showing and hiding scroll to top button based on users scroll position
    let scrollToTopButton = document.getElementById("scroll-to-top-button");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {showScrollButton()};
    
    function showScrollButton() {        
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    }

    // Scroll to top button
    document.getElementById('scroll-to-top-button').addEventListener('click', scrollToTop);


    // -------------------- Change Font Size, Contrast And Borders -------------------- //
    // Run increase or decrease contrast functions based on state of session varaible
    if (sessionStorage.getItem("contrast") == "light") {
        lightMode();
    } else if (sessionStorage.getItem("contrast") == "dark") {
        darkMode();
    } else if (sessionStorage.getItem("contrast") == "reset") {
        resetContrast();
    }

    // Change contrast buttons
    document.getElementById('light-mode-button').addEventListener('click', lightMode);
    document.getElementById('dark-mode-button').addEventListener('click', darkMode);
    document.getElementById('decrease-contrast-button').addEventListener('click', resetContrast);

    // Set the font size for a new page based on the value set in the session variable from a previous page
    const sessionKeyFontSize = sessionStorage.getItem("fontSize");
    if (sessionKeyFontSize !== null) {
        let fontSize = sessionStorage.getItem("fontSize");
        fontSize = Number(fontSize);
        rootElement.style.fontSize = fontSize + "px";
    }

    // Change font size buttons
    document.getElementById('increase-font-size-button').addEventListener('click', increaseFontSize);
    document.getElementById('decrease-font-size-button').addEventListener('click', decreaseFontSize);
    document.getElementById('reset-font-size-button').addEventListener('click', resetFontSize);


    // Run add or remove border functions based on state of session varaible
    if (sessionStorage.getItem("borders") == "add") {
        addBorders();
    } else if (sessionStorage.getItem("borders") == "remove") {
        removeBorders();
    }

    // Change border buttons
    document.getElementById('add-borders-button').addEventListener('click', addBorders);
    document.getElementById('remove-borders-button').addEventListener('click', removeBorders);
    

    // -------------------- Show More Elements -------------------- //
    // Error handle event listeners to prevent an error being thrown if that element does not appear on the page
    try {
        // Home page show more button
        document.querySelector('.show-more-button').addEventListener('click', showMore);
        // Home page show less button
        document.querySelector('.show-less-button').addEventListener('click', showLess);

    } catch (error) {
        // console.log(error);
    }
}


// Runs init function
window.onload = init;
