$(function () {
  $('#calendar').fullCalendar(
    {
      events: 'src/Controller/ScheduleController.php',//表示するJSONのリンク
    }
  );
});