<div id="insertBlock">
    <h3>新增學生資料</h3>
    <form  id="create">
      <ul>
        <li>姓名：<input type="text" name="name" id="name"></li>
        <li>學號：<input type="text" name="uni_id" id="uni_id"></li>
        <li>班級座號：<input type="text" name="class_num" id="class_num"></li>
        <li>生日：<input type="text" name="birthday" id="birthday"></li>
        <li>身分號字號：<input type="text" name="nat_id" id="nat_id"></li>
        <li>住址：<input type="text" name="addr" id="addr"></li>
        <li>父母：<input type="text" name="parent" id="parent"></li>
        <li>電話：<input type="text" name="tel" id="tel"></li>
        <li>科別：<input type="text" name="dept" id="dept"></li>
        <li>畢業國中：<input type="text" name="grad_at" id="grad_at"></li>
      </ul>
      <div>
        <input type="button" value="確定新增" onclick="create()">
        <input type="button" value="取消" onclick="cancel()">  
      </div>


    </form>
  </div>