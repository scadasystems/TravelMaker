$(document).ready(function () {
  "use strict";

  $(function () {
    $(".expand_airline").on("click", function () {
      $(this).next().slideToggle(100);
      $expand_airline = $(this).find(">:first-child");

      if ($expand_airline.text() == "+") {
        $expand_airline.text("-");
      } else {
        $expand_airline.text("+");
      }
    });
  });

  $('.pagination-inner a').on('click', function () {
    $(this).siblings().removeClass('pagination-active');
    $(this).addClass('pagination-active');
  })
});