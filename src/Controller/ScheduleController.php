<?php
class ScheduleController extends BaseController
{
  // スケジュールを取得
  $scheduleModel = new ScheduleModel();
  $scheduleModel->getSchedules($_SESSION["user_id"]);
  
}