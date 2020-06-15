<?php

include_once "base.php";
$db= new db('students');
$classes = $db->q("SELECT substring(`class_num`,1,3) as `班級` FROM `students` group by substring(`class_num`,1,3)");
// echo "<pre>";
// print_r($classes);
// echo "</pre>";
foreach($classes as $c){
  echo "<option value='".$c['班級']."'>".$c['班級']."</option>";
}




?>


