$(document).ready(function () {
  "use strict";

  $(function () {
    $(".expand_airline").on("click", function () {
      $(this).next().slideToggle(100);
    });
  });

  $('.pagination-inner a').on('click', function () {
    $(this).siblings().removeClass('pagination-active');
    $(this).addClass('pagination-active');
  })
});