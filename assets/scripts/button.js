$(document).ready(function () {
  $(".add-player-to-list").on('click', function () {
    var html = $(this).closest("tr").html();
    $("#my_schedules").append("<tr>" + html + "</tr>");
  });
});
