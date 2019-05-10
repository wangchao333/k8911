<script language="javascript">
  function showMenu(id)
  {
	  $("#td"+id).css("background-color","#676767");
	  $("#div"+id).css({"width":$("#td"+id).width(),"left":$("#td"+id).offset().left,"top":$("#td"+id).offset().top+$("#td"+id).height()});
	  $("#div"+id).show();
  }
  function hideMenu(id)
  {
	  $("#td"+id).css("background-color","#E4E9EC");
	  $("#div"+id).hide();
  }
  function logout()
  {
	  if(confirm("是否退出后台管理？"))
	  {
		  window.location = "";
	  }
  }
</script>
<table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
        <tr>
          <td class="head1">www.ttnewS.com</td>
          <td width="299"><img src="../public/images/image6.gif"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="head2">&nbsp;</td>
  </tr>
  <tr>
    <td>
      <table border="0" align="center" width="800" bgcolor="#E4E9EC" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" align="center"><a href="#" onclick="logout()">重新登陆</a></td>
          <td id="td1" align="center" onmouseover="showMenu(1)" onmouseout="hideMenu(1)">
            <a href="#">新闻管理</a><br>
            <div id="div1">
              <a href="addnews.php">添加新闻</a><br>
              <a href="modnews.php">修改新闻</a><br>
            </div>
          </td>
          <td id="td2" align="center" onmouseover="showMenu(2)" onmouseout="hideMenu(2)">
            <a href="#">分类管理</a><br>
            <div id="div2">
              <a href="addtype.php">添加分类</a><br>
              <a href="modtype.php">修改分类</a><br>
            </div>
          </td>
          <td id="td3" align="center" onmouseover="showMenu(3)" onmouseout="hideMenu(3)">
            <a href="#">用户管理</a><br>
            <div id="div3">
              <a href="addusers.php">添加用户</a>
            </div>
          </td>
          <td align="center"><a href="#">返回主页</a></td>
        </tr>
      </table>
    </td>
  </tr>
</table>