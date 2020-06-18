<?php

include_once "base.php";

$class = $_GET['class'];
$db = new DB("students");
$students = $db->q("select `id`,`name`,`class_num`,`dept`,`nat_id` from `students` where substring(`class_num`,1,3)='$class'");
foreach($students as $stu){
  echo "<div class='stu'>".$stu['name'];
  echo "<button onclick='getUpdateForm(".$stu['id'].")'>編輯</button>";
  echo "<button onclick='del(".$stu['id'].")'>刪除</button>";
  echo "</div>";
}

?>