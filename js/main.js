$(document).ready(function () {
  // Init bootstrap tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })


  $('.open-menu-btn').click(function () {
    $('.menu-nav').addClass("is-open")
  })
  $('.close-menu-btn').click(function () {
    $('.menu-nav').removeClass("is-open")
  })
});
