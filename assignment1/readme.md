##Gallery Assignment

To complete this assignment, you must implement the following:

* Start by creating a self-invoking anonymous function. Inside this is where you will your code.
* Using event delegation, add an event listener on the gallery that checks when a child a.like element is clicked. I want you to manipulate the UI of the respective div.photo container in some way when its "Like" anchor is clicked. For example, add a new class to that __parent__ .photo container to highlight that div in some way.
* When the "Like" anchor is clicked, increase the total count at the top of the page. You will need to fetch this value from the DOM using .html() and use JavaScript's parseInt function to convert its value from a string to a number.
* When the "Like" anchor is clicked, replace the anchor element with a <span> element containing the text, "Liked!"
* After the Like anchor is clicked for a particular item, the user should not be able to click it again to further increase the Like count at the top. (Hint: remove the 'like' class from the clicked element)
* Implement a lightbox plugin that brings up a larger version of that photo when the anchor surrounding the image is clicked. Here are a list of lightbox plugins for jQuery
	* [Fancybox](http://fancyapps.com/fancybox/)
	* [Lightbox](http://leandrovieira.com/projects/jquery/lightbox/)
	* [colorbox](http://www.jacklmoore.com/colorbox)

You are free to change any text and images used in this skeleton.

Please upload this assignment to GitHub into a repository on your account labeled 'ITP404-Assignment2'. Also, please upload lab 1 to your GitHub account and call the repository 'ITP404-Lab1'. When you are finished, send me an email with the link to your GitHub account so I can check it.

####Helpful functions / methods in this assignment:
* [parseInt()](https://developer.mozilla.org/en-US/docs/JavaScript/Reference/Global_Objects/parseInt) - JavaScript function that converts a string into a number
* jQuery replaceWith() - replace an element with another element
* jQuery parent() - get the parent of an element
* jQuery html() - get or set the innerHTML of an element
* e.preventDefault() - prevents the default behavior of an element