<?php

include_once "base.php";

$class = $_GET['class'];
$db = new DB("students");
$students = $db->q("select `name`,`class_num`,`dept`,`nat_id` from `students` where substring(`class_num`,1,3)='$class'");
foreach($students as $stu){
  echo "<div class='stu'>".$stu['name']."</div>";
}

?>