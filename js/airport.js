$(document).ready(function () {
  "use strict";

  $(function () {
    $(".expand_airline").on("click", function () {
      $(this).next().slideToggle(100);
      $expand = $(this).find(">:first-child");

      if ($expand.text() == "+") {
        $expand.text("-");
      } else {
        $expand.text("+");
      }
    });
  });

  $('.pagination-inner a').on('click', function () {
    $(this).siblings().removeClass('pagination-active');
    $(this).addClass('pagination-active');
  })
});