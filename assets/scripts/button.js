$(document).ready(function () {
  $(".add-player-to-list").on('click', function () {
    var html = $(this).closest("tr").html();
    $('#GK1Modal').modal('hide');
    $('#CB1Modal').modal('hide');
    $('#CB2Modal').modal('hide');
    $('#CB3Modal').modal('hide');
    $('#CM1Modal').modal('hide');
    $('#CM2Modal').modal('hide');
    $('#CM3Modal').modal('hide');
    $('#CM4Modal').modal('hide');
    $('#LM1Modal').modal('hide');
    $('#RM1Modal').modal('hide');
    $('#CAM1Modal').modal('hide');
    $('#ST1Modal').modal('hide');
    $('#ST2Modal').modal('hide');
    $('#RW1Modal').modal('hide');
    $('#RW2Modal').modal('hide');
    $('#LW12Modal').modal('hide');
    $('#RW1Modal').modal('hide');
    $('#CDM1Modal').modal('hide');
    $("#my_schedules").append("<tr>" + html + "</tr>");
    $("#my_schedules").find(".add-player-to-list").remove();
    $("#my_schedules").find(".prefferedfoot").remove();
  });
});
