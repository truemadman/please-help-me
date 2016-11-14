/*global $*/
$(document).ready(function() {
$('#loginButton').click(function() {
  $('#loginForm').toggle('slow', function() {
    // Animation complete.
  });
});
});