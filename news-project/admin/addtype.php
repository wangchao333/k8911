<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../public/css/admin.css" type="text/css" rel="stylesheet" />
    <script language="javascript" src="__ROOT__/library/jquery/jquery-1.4.js"></script>
    <script language="javascript">
      function checkAdd()
      {
          if(document.frm.typeName.value == "")
          {
              alert("请输入分类名称！");
              document.frm.typeName.focus();
              return false;
          }
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="__APP__/AddType/add" onsubmit="return checkAdd()">
    <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php include "Public/header.php" ;?></td>
      </tr>
      <tr>
        <td colspan="2" class="msgTd">后台管理：添加分类</td>
      </tr>
      <tr>
        <td width="150" bgcolor="#D3D6FF" valign="top">
        	<?php include "Public/left.php" ;?>
        	</td>
        <td width="650" bgcolor="#ffffff" valign="top" align="center">
          <br><br><br>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0">
            <tr>
              <td class="addtype1">添加新分类名</td>
            </tr>
          </table>
          <br>
          <table border="0" align="center" width="260" cellpadding="0" cellspacing="0">
            <tr>
              <td class="addtype2">
                &nbsp;分类名：<input type="text" name="typeName" size="20" class="txt1">
              </td>
            </tr>
          </table>
          <br>
          <input type="submit" value="添加" class="btn1">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>