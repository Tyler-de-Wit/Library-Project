// Create object for chat messages
const chatMessagesObject = {
    sender: [],
    message: [],
    time: []
};


// Use session storage to fill the chatbox conversation saved from other pages on the site
function fillPreviousConversation( conversationObject ) {
    'use strict';

    // Loop through arrays in conversationObject and run outputMessage function to display stored messages in the chatbox
    for ( let i = 0; i < conversationObject.message.length; i++ ) {
        outputMessage( conversationObject.sender[i], conversationObject.message[i], conversationObject.time[i] );
    }
}


// Handle the message that the user typed in
function receiveMessage( event ) {
    'use strict';
    event.preventDefault();

    // Get user input from the form
    let userInput = document.querySelector( '.chatbox-input' ).value;

    // Check if user entered any text before running functions
    if ( userInput !== '' ) {
        // Run functions to output the user message and then generate a response
        outputMessage( 'You', userInput, getTime() );
        createAutomatedResponse();
    }
}


// Create the automated response to the user
function createAutomatedResponse() {
    'use strict';

    // Get user input from last element of chatMessagesObject message array
    let userInput = chatMessagesObject.message.at( -1 );
    userInput = userInput.toLowerCase();

    // Test userInput for keywords so a response can be made and output
    // Microsoft Setup
    if ( userInput.includes( 'microsoft' ) || userInput.includes( 'authenticator' ) ) { 
        let automatedMessage = 'You should visit our <a href="microsoft-365">Microsoft Setup</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Access Blackboard
    else if( userInput.includes( 'blackboard' ) ) { 
        let automatedMessage = 'You should visit our <a href="blackboard">Access Blackboard</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Login To Wifi
    else if( userInput.includes( 'wifi' ) || userInput.includes( 'wi-fi' ) ) { 
        let automatedMessage = 'You should visit our <a href="wifi">Login To WIFI</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // AMEP
    else if( userInput.includes( 'amep' ) || userInput.includes( 'english' ) ) { 
        let automatedMessage = 'You should visit our <a href="amep">AMEP</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Library Printers
    else if( userInput.includes( 'printers' ) ) { 
        let automatedMessage = 'You should visit our <a href="printers">Library Printers</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Password Help
    else if( userInput.includes( 'password' ) ) { 
        let automatedMessage = 'You should visit our <a href="passwords">Password Help</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Locating Timetable
    else if( userInput.includes( 'timetable' ) ) { 
        let automatedMessage = 'You should visit our <a href="timetable">Locating Timetable</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Student Card
    else if( userInput.includes( 'card' ) ) { 
        let automatedMessage = 'You should visit our <a href="student-id-card">Student Card</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Smart Rider
    else if( userInput.includes( 'discount' ) || userInput.includes( 'smartrider' ) || userInput.includes( 'smart rider' ) || userInput.includes( 'transperth' ) ) { 
        let automatedMessage = 'You should visit our <a href="smart-rider">Smart Rider</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Library Study Rooms
    else if( userInput.includes( 'study' ) ) { 
        let automatedMessage = 'You should visit our <a href="book-a-study-room">Library Study Rooms</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Disability Support
    else if( userInput.includes( 'disability' ) ) { 
        let automatedMessage = 'You should visit our <a href="disability-support">Disability Support</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Jobs And Skills Centre
    else if( userInput.includes( 'jobs' ) || userInput.includes( 'skills' ) ) { 
        let automatedMessage = 'You should visit our <a href="jobs-and-skills-centre">Jobs And Skills Centre</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Frequently Asked Questions
    else if( userInput.includes( 'faq' ) || userInput.includes( 'frequently' ) || userInput.includes( 'question' ) ) { 
        let automatedMessage = 'You should visit our <a href="frequently-asked-questions">Frequently Asked Questions</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Contact Us
    else if( userInput.includes( 'contact' ) || userInput.includes( 'help' ) ) { 
        let automatedMessage = 'You should visit our <a href="contact">Contact</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Sitemap
    else if( userInput.includes( 'sitemap' ) ) { 
        let automatedMessage = 'You should visit our <a href="sitemap">Sitemap</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    // Articles
    else if( userInput.includes( 'articles' ) || userInput.includes( 'posts' ) ) { 
        let automatedMessage = 'You should visit our <a href="articles">Articles</a> page to learn more';
        outputMessage( 'Library', automatedMessage, getTime() );
    }
    else {
        let automatedMessage = "Sorry, We can't seem to find a page that matches your query. You can try visiting our <a href='sitemap'>Sitemap</a> page to look for the page you are after";
        outputMessage( 'Library', automatedMessage, getTime() );
    }
}


// Output messages to the chatbox
function outputMessage( messageSender, messageText, messageTime ) {
    'use strict';

    // Set the message to be output
    let messageOutput = `
        <div class="message">
            <div class="message-sender">${messageSender}</div>
            <div class="message-text">${messageText}</div>
            <div class="message-timestamp">${messageTime}</div>
        </div>
    `;

    // Push message information to object
    chatMessagesObject.sender.push( messageSender );
    chatMessagesObject.message.push( messageText );
    chatMessagesObject.time.push( messageTime );

    // Convert object to JSON string and store it in session variable for use across pages
    const chatMessagesObjectToString = JSON.stringify( chatMessagesObject );
    sessionStorage.setItem( "conversation", chatMessagesObjectToString );

    // Output the message inside of html tags into the chatbox
    document.querySelector( '.chatbox-messages' ).innerHTML += messageOutput;

    // Scroll to bottom of the chats so user can see the most recent ones
    document.querySelector( '.chatbox-messages' ).scrollTop = document.querySelector( '.chatbox-messages' ).scrollHeight;

    // Empty input field
    document.querySelector( '.chatbox-input' ).value = '';
}


// Clear the chat inside the box 
function clearChat() {
    'use strict';

    // Remove all entries from chatMessagesObject arrays
    while ( chatMessagesObject.sender.length > 0 ) {
        chatMessagesObject.sender.pop();
    }
    while ( chatMessagesObject.message.length > 0 ) {
        chatMessagesObject.message.pop();
    }
    while ( chatMessagesObject.time.length > 0 ) {
        chatMessagesObject.time.pop();
    }

    // Remove all messages from html chatbox
    document.querySelector( '.chatbox-messages' ).innerHTML = '';

    // Empty input field
    document.querySelector( '.chatbox-input' ).value = '';

    // Clear session variable
    sessionStorage.removeItem( 'conversation' );
}


// Get the current time in hours and minutes
function getTime() {
    'use strict';

    // Get date and seperate it into hours and minutes
    var date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    // Make time variables with formatting
    let time = hours + ':' + minutes;

    return time;
}


// Event listeners 
function init() {
    'use strict';

    try {
        // Runs receiveMessage function when form is submitted
        document.getElementById( 'chatbox-form' ).addEventListener( 'submit', receiveMessage );
    
        // Runs clearChat function when button is clicked
        document.querySelector( '.clear-chat-button' ).addEventListener( 'click', clearChat );
    } catch( error ) {
        console.log( error );
    }
    

    // Runs fillPreviousConversation if previous conversation is stored in session varaible
    const sessionConversationString = sessionStorage.getItem( 'conversation' );
    const sessionConversationObject = JSON.parse( sessionConversationString );
    if ( sessionConversationObject !== null ) {
        fillPreviousConversation( sessionConversationObject );
    }
}


// Runs init function
window.onload = init();
