<?php
//處理更新資料的請求

include_once "base.php";
$db = new DB("students");

if(!empty($_POST)){
  echo $db->save($_POST);
}

?>