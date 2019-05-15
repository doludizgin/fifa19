$(document).ready(function() {
    $(".btn btn-success").click(function() {
      var html = $(this).closest("tr").clone().find('td:last').remove().end().prop('outerHTML');
      $("#my_schedules").append(html);
    });
  });
  