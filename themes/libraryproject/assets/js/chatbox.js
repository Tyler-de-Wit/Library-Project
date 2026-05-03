// Import page data from JSON file
import chatboxPages from './chatbox-pages.json' with { type: 'json' };


// User hints message
const userHintsMessage = 'Hello, you can use this chatbox to search through all the information on this site. You can try searching for things like "How do I setup Microsoft 365", "How can I connect to the campus Wi-Fi", "What is my default password", "How do I log into Blackboard" among many others.';


// Create object for chat messages
const chatMessagesObject = {
    sender: [],
    message: [],
    time: []
};


// Use session storage to fill the chatbox conversation saved from other pages on the site
function fillPreviousConversation(conversationObject) {
    'use strict';

    // Loop through arrays in conversationObject and run outputMessage function to display stored messages in the chatbox
    for (let i = 0; i < conversationObject.message.length; i++) {
        outputMessage(conversationObject.sender[i], conversationObject.message[i], conversationObject.time[i]);
    }
}


// Get the users Input
function getUserInput() {
    'use strict';

    return document.querySelector('.chatbox-input').value;
}


// Handle the message that the user typed in
function receiveMessage(event) {
    'use strict';

    event.preventDefault();
}


// Create the automated response to the user
function createAutomatedResponse() {
    'use strict';

    // Get user input from last element of chatMessagesObject message array
    let userInput = chatMessagesObject.message.at(-1);
    userInput = userInput.toLowerCase();
    let automatedMessage = "";

    // Loop through all pages in the Object
    for (const [pageId, pageData] of Object.entries(chatboxPages)) {

        // Loop though each page's keywords in the array
        for (let i = 0; i < pageData.queries.length; i++) {

            // Test userInput for keywords so a response can be made and output
            if (userInput.includes(pageData.queries[i])) {

                if (pageId === "other" && automatedMessage === "") { // If all pages are searched and none matched then set fallback message
                    automatedMessage = "Sorry, We can't seem to find a page that matches your query. You can try visiting our <a href='sitemap'>Sitemap</a> page for a full list of pages on this website.";
                } else if (pageId === "other") { // If some pages matched query then also add the sitemap page to end of message
                    automatedMessage += `Also you could take a look at our <a href="${pageData.pageLink}">${pageData.pageTitle}</a> page for a full list of pages and information available on this site.<br>`;
                    break;
                } else { // Append all pages to output message that match the query
                    automatedMessage += `You should visit our <a href="${pageData.pageLink}">${pageData.pageTitle}</a> page to learn more.<br>`;
                }
            }
        }
    }

    outputMessage('Library', automatedMessage, getTime());
}


// Output messages to the chatbox
function outputMessage(messageSender, messageText, messageTime) {
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
    chatMessagesObject.sender.push(messageSender);
    chatMessagesObject.message.push(messageText);
    chatMessagesObject.time.push(messageTime);

    // Convert object to JSON string and store it in session variable for use across pages
    const chatMessagesObjectToString = JSON.stringify(chatMessagesObject);
    sessionStorage.setItem("conversation", chatMessagesObjectToString);

    // Output the message inside of html tags into the chatbox
    document.querySelector('.chatbox-messages').innerHTML += messageOutput;

    // Scroll to bottom of the chats so user can see the most recent ones
    document.querySelector('.chatbox-messages').scrollTop = document.querySelector('.chatbox-messages').scrollHeight;

    // Empty input field
    document.querySelector('.chatbox-input').value = '';
}


// Clear the chat inside the box 
function clearChat() {
    'use strict';

    // Remove all entries from chatMessagesObject arrays
    while (chatMessagesObject.sender.length > 0) {
        chatMessagesObject.sender.pop();
    }
    while (chatMessagesObject.message.length > 0) {
        chatMessagesObject.message.pop();
    }
    while (chatMessagesObject.time.length > 0) {
        chatMessagesObject.time.pop();
    }

    // Remove all messages from html chatbox
    document.querySelector('.chatbox-messages').innerHTML = '';

    // Empty input field
    document.querySelector('.chatbox-input').value = '';

    // Clear session variable
    sessionStorage.removeItem('conversation');

    // Output hints for the user to start the conversation
    outputMessage('Library', userHintsMessage, getTime());
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

    const sessionConversationString = sessionStorage.getItem('conversation');
    const sessionConversationObject = JSON.parse(sessionConversationString);

    // Output hints for the user if there is no previous conversation so that the hints will be first in the conversation
    if (sessionConversationObject === null) {
        outputMessage('Library', userHintsMessage, getTime());
    }
    
    // Runs fillPreviousConversation if previous conversation is stored in session varaible
    if (sessionConversationObject !== null) {
        fillPreviousConversation(sessionConversationObject);
    }

    try {
        // Scroll to bottom of the chats when chatbox is opened so user can see the most recent ones
        document.getElementById('right-menu-toggler').addEventListener('click', () => {
            document.querySelector('.chatbox-messages').scrollTop = document.querySelector('.chatbox-messages').scrollHeight;
        });

        // Check for input submission and then run message processing functions
        document.getElementById('chatbox-form').addEventListener('submit', (event) => {
            receiveMessage(event);

            // Run functions to output the user message and then generate a response
            if (getUserInput() !== '') {
                outputMessage('You', getUserInput(), getTime());
                createAutomatedResponse();
            }
        });

        // Runs clearChat function when button is clicked
        document.querySelector('.clear-chat-button').addEventListener('click', clearChat);
    } catch (error) {
        console.log(error);
    }
}


// Runs init function
window.onload = init();
