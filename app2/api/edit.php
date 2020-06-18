<?php

include_once "base.php";

$db = new DB("students");
$id = $_GET['id'];
$row = $db->find($id);


?>


<div id="editBlock">
  <h3>編輯學生資料</h3>
  <form id="create">
    <ul>
      <li>姓名：<input type="text" name="name" id="name" value="<?= $row['name'] ?>"></li>
      <li>學號：<input type="text" name="uni_id" id="uni_id" value="<?= $row['uni_id'] ?>"></li>
      <li>班級座號：<input type="text" name="class_num" id="class_num" value="<?= $row['class_num'] ?>"></li>
      <li>生日：<input type="text" name="birthday" id="birthday" value="<?= $row['birthday'] ?>"></li>
      <li>身分號字號：<input type="text" name="nat_id" id="nat_id" value="<?= $row['nat_id'] ?>"></li>
      <li>住址：<input type="text" name="addr" id="addr" value="<?= $row['addr'] ?>"></li>
      <li>父母：<input type="text" name="parent" id="parent" value="<?= $row['parent'] ?>"></li>
      <li>電話：<input type="text" name="tel" id="tel" value="<?= $row['tel'] ?>"></li>
      <li>科別：<input type="text" name="dept" id="dept" value="<?= $row['dept'] ?>"></li>
      <li>畢業國中：<input type="text" name="grad_at" id="grad_at" value="<?= $row['grad_at'] ?>"></li>
      <li><input type="hidden" name="id" id="id" value="<?= $row['id'] ?>"></li>
    </ul>
    <div>
      <input type="button" value="確定修改" onclick="update()">
      <input type="button" value="取消" onclick="cancel()">
    </div>
  </form>
</div>