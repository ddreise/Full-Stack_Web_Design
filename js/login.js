// Event listeners for login page
var username = document.getElementById('username');
var password = document.getElementById('password');
var passwordFeedback = document.getElementById('usernameFeedback');
var usernameFeedback = document.getElementById('passwordFeedback')
const minLength = 7;

function checkUsernameLength(minLength) {
   
    if (username.value.length < minLength) {
        usernameFeedback.innerHTML = '<p>Username must be ' + minLength.toString() + ' characters or more</p>';
    }
    else {
        usernameFeedback.innerHTML = '';
    }
}

// Check if password has at least one upper case letter and one number
function checkPassword(event, minLength) {

    var character = '';
    var upperCase = false;
    var number = false;
    
    // Check password length
    if (password.value.length < minLength) {
        passwordFeedback.innerHTML = '<p>Password must be ' + minLength.toString() + ' characters or more</p>';
    }
    else {
        passwordFeedback.innerHTML = '';
    }

    // * Check password for capital letter
    // Reference: https://stackoverflow.com/questions/1027224/how-can-i-test-if-a-letter-in-a-string-is-uppercase-or-lowercase-using-javascrip/9728437
    // Reference: https://github.com/mgalleconestoga/SoftwareEngineeringESE/blob/master/js/eventListeners.js
    for (var i = 0; i < password.value.length; i++){
        character = password.value.charAt(i);
        if (character == character.toUpperCase()){
            upperCase = true;
        }

        if (!isNaN(character * 1)) {
            number = true;
        }
    }

    if (upperCase == false || number == false){
        passwordFeedback.innerHTML = '<p>Your password must have at least one number and one capital letter</p>';
    }
    else {
        passwordFeedback.innerHTML = '<p>Password OK!</p>';
    }

}

// Give focus to username textbox when page loads
function startup() {
    var input;
    input = document.getElementById('username');
    input.focus();
}

// Event listener --> anonymous function
username.addEventListener('blur', function() {checkUsernameLength(minLength)}, false);      // Checking username length
password.addEventListener('blur', function() {checkPassword(event, minLength)}, false);     // Checking password credentials
window.addEventListener('load', startup, false);                                            // On page load, give focus to username box
