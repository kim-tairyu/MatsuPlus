<?php
class FestivalController
{
  //----------------------------------------------------
  // お気に入り処理
  //----------------------------------------------------
  public function putFavoriteFestival($user_id, $fes_id) {
    $favoriteModel = new FavoriteModel();
    $favoriteModel->putFavoriteFestival($user_id, $fes_id);
  }
  //----------------------------------------------------
  // レビュー処理
  //----------------------------------------------------
  public function putReview($fes_id, $user_id, $kanso, $star) {
    $reviewModel = new ReviewModel();
    $reviewModel->putReview($fes_id, $user_id, $kanso, $star);
  }
  //----------------------------------------------------
  // スケジュール登録処理
  //----------------------------------------------------
  public function addSchedule($user_id, $event, $place, $free) {
    $scheduleModel = new ScheduleModel();
    $scheduleModel -> addSchedule($user_id, $event, $place, $free);
  }
  //----------------------------------------------------
  // DBからお祭り画像を取得
  //----------------------------------------------------
  public function getOneFestival($fes_id) {
    $festivalModel = new FestivalModel();
    return $festivalModel->getOneFestival($fes_id);
  }
  //----------------------------------------------------
  // DBからお祭り画像を取得
  //----------------------------------------------------
  public function getImageFestival($fes_id) {
    $festivalModel = new FestivalModel();
    return $festivalModel->getImageFestival($fes_id);
  }
  //----------------------------------------------------
  // DBからお土産情報を取得
  //----------------------------------------------------
  public function getGift($fes_id) {
    $giftModel = new GiftModel();
    $festival_gift = $giftModel->getGift($fes_id);
  }
  //----------------------------------------------------
  // DBからレビュー情報を取得
  //----------------------------------------------------
  public function getReviewInfo($fes_id) {
    $reviewModel = new ReviewModel();
    return $reviewModel->getReviewInfo($fes_id);
  }
  //----------------------------------------------------
  // DBからタグ情報を取得
  //----------------------------------------------------
  public function getTag($fes_id) {
    $tagModel = new TagModel();
    return $tagModel->getTag($fes_id);
  }
  //----------------------------------------------------
  // レビュー☆表示処理
  //----------------------------------------------------
  public function r_star($star) {
    for($i=0; $i<$star; $i++){
      echo "☆";
    }
  }
}