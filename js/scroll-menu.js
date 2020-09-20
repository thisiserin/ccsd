/**
 * File scroll-menu.js
 *
 * Adds class for fixed positioned menu on scroll.
 */

 window.onscroll = function() {myFunction()};

 // Get the header
 var header = document.getElementById("masthead");

 // Get the offset position of the navbar
 var sticky = header.offsetTop;

 // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
 function myFunction() {
   if (window.pageYOffset > sticky) {
     header.classList.add("fixed-menu");
   } else {
     header.classList.remove("fixed-menu");
   }
 }
