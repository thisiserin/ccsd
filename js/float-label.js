/**
 * File float-label.js
 *
 * Moves form labels
 */

 jQuery(document).ready(function($) { //no conflict
    $("input, textarea").each(function() {
        if ($(this).val().length != 0) { //In case there is a preloaded value

            $(this).parent().siblings("label").addClass("move");
        } else {
            $(this).parent().siblings("label").removeClass("move");
        }
    });
    $("input, textarea").focus(function() { //On focus move the label

        $(this).parent().siblings("label").addClass("move");
    });
    $("input, textarea").focusout(function() {
//On focusout check if there is any value, else remove the move class.
        if ($(this).val().length == 0) {
            $(this).parent().siblings("label").removeClass("move");
        }
    });
});
