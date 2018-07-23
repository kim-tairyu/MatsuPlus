$(function () {
  $('#calendar').fullCalendar(
    {
      events:'../app/getdata.php',//表示するJSONのリンク
    }
  );
});