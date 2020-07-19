// Request Access

var el;
var elForm;
var firstNameFeedback, lastNameFeedback;
var firstNameInput, lastNameInput, termsInput;

elForm = document.getElementById('access');
firstNameFeedback = document.getElementById('firstNameFeedback');
lastNameFeedback = document.getElementById('lastNameFeedback');

firstname = document.getElementById('firstname');
lastname = document.getElementById('lastname');
email = document.getElementById('email');




// Check that firstname is inputted
function checkFirstName(event) {
    if (firstname.value.length < 1) {
        firstNameFeedback.innerHTML = '<--- You must enter your first name.';
        event.preventDefault();
    }
    else {
        firstNameFeedback.innerHTML = '';
    }
}

// Check that lastname is inputted
function checkLastName(event) {
    if (lastname.value.length < 1) {
        lastNameFeedback.innerHTML = '<--- You must enter your last name.';
        event.preventDefault();
    }
    else {
        lastNameFeedback.innerHTML = '';
    }
}

// Remaining charcaters
function charCount(e) {
    var textEntered, charDisplay, counter, lastkey;
    textEntered = document.getElementById('comments').value;        // Text input by user
    charDisplay = document.getElementById('commentsFeedback');      // Get element that displays remaining chars
    lastkey = document.getElementById('lastkey');                   // Get element that dsiplays last key input by user

    counter = (180 - (textEntered.length));                         // Remaining characters
    if (counter < 0) {
        charDisplay.innerHTML = 'Max characters exceeded!';
    }
    else {
        charDisplay.innerHTML = 'Characters remaining: ' + counter;
    }
    lastkey.innerHTML = 'Last key input: ' + String.fromCharCode(e.keyCode);
}



el = document.getElementById('comments');
el.addEventListener('keypress', charCount, false);

elForm.addEventListener('submit', function(event) {
    checkFirstName(event); 
    checkLastName(event);
}, false);