$(document).ready(function () {
  $(".add-player-to-list").on('click', function () {
    var html = $(this).closest("tr").html();
    $("#my_schedules").append("<tr>" + html + "</tr>");
    $("#my_schedules").find(".add-player-to-list").remove();
    $("#my_schedules").find(".prefferedfoot").remove();
  });
});
