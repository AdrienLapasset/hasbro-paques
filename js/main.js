$(document).ready(function () {
  
  // Open/close menu
  $('.open-menu-btn').click(function () {
    $('.menu-nav').addClass("is-open")
  })
  $('.close-menu-btn').click(function () {
    $('.menu-nav').removeClass("is-open")
  })

  // Grid checkbox limit
  var limit = 6;
  $('#grid-1 input[type=checkbox]').on('change', function(e) {
   if($('#grid-1 input[type=checkbox]:checked').length >= limit + 1) {
       this.checked = false;
   }
  });
  $('#grid-2 input[type=checkbox]').on('change', function(e) {
   if($('#grid-2 input[type=checkbox]:checked').length >= limit + 1) {
       this.checked = false;
   }
  });
});
