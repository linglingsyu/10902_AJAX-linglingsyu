<?php

include_once "base.php";

$str = $_GET['str'];
$db = new DB("students");

// 使用like指令進行模糊搜尋
$query = $db->all([]," where name like '%$str%'");
foreach($query as $q){
  echo "<div>結果一：".$q['name']."-".$q['class_num']."-".$q['dept']."</div>";
}

?>