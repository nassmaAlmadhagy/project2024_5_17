function sendMessage() {
    var messageInput = document.getElementById("message-input");
    var message = messageInput.value;

    if (message.trim() !== "") {
        // Alternate between user-1 and user-2 for demonstration purposes
        var user = (Math.random() > 0.5) ? "User-1" : "User-2";
        
        // Display the message in the chat box with user-specific style
        displayMessage(user, message);

        // Clear the input field
        messageInput.value = "";
    }
}

function displayMessage(user, message) {
    var chatBox = document.getElementById("chat-box");
    var newMessage = document.createElement("div");
    newMessage.classList.add(user.toLowerCase()); // Apply user-specific style
    newMessage.innerHTML = `<strong>${user}:</strong> ${message}`;
    chatBox.appendChild(newMessage);

    // Scroll to the bottom to show the latest message
    chatBox.scrollTop = chatBox.scrollHeight;
}
