// Nodelists look like and are numbered like arrays
// To retrieve an item from a Nodelist, use array syntax (square brackets)


// Change class name
var elements = document.getElementsByClassName('hot');
if (elements.length >= 1) {
    var firstItem = elements[0];
    elements[0].className = 'cool';     // Change the first item class name to
}

// Change all class names
var hotItems = document.querySelectorAll('li.hot');
for (var i = 0; i < hotItems.length; i++){
    hotItems[i].className = 'cool';             // change all class='hot' to 'cool'
}

// Turn first item in list into a LINK
var firstItem = document.getElementById('one');     // Reference to element in DOM tree
var itemContent = firstItem.innerHTML;
firstItem.innerHTML = "<a href=\'http://www.google.com\'>" + itemContent + '</a>';

// Create new element and text node
var newEL = document.createElement('li');               // create new element
var newText = document.createTextNode('quinoa');        // create text node
newEL.appendChild(newText);                             // append text node to new element
var position = document.getElementsByTagName('ul')[0];  // Find DOM position to append new element
position.appendChild(newEL);                            // append new element to DOM


// Other functions for manipulation
var firstItem = document.getElementById('one');     // Get first line item
if (firstItem.hasAttribute('class')) {              // Check to make sure it has the class attribute
    var attr = firstItem.getAttribute('class');     // Get class firstItem (contains string 'hot')
    firstItem.setAttribute('class', 'cool');        // Change class to 'cool'
    firstItem.className = 'hot';                    // Change class back to 'hot'
    firstItem.id = "newID";                         // Give firstItem an ID
    firstItem.removeAttribute('class');             // Remove class
}

// TODO: Front-End Development 8 - Javascript - Slide 38 --> Two tasks