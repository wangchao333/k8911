<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../public/css/admin.css" type="text/css" rel="stylesheet" />
    <script language="javascript" src="__ROOT__/library/jquery/jquery-1.4.js"></script>
    <script language="javascript">
	    function checkAdd()
	    {
	    	$("#tdName").html("");
	    	$("#tdPwd").html("");
	    	$("#tdCheckPwd").html("");
	    	$("#tdUserType").html("");
		    if(document.frm.userName.value == "")
		    {
			    $("#tdName").html("<font color='red'>请输入用户名！</font>");
			    document.frm.userName.focus();
		    }
		    else if(document.frm.password.value == "")
		    {
			    $("#tdPwd").html("<font color='red'>请输入密码！</font>");
			    document.frm.password.focus();
		    }
		    else if(document.frm.password.value != document.frm.checkPwd.value)
		    {
			    $("#tdCheckPwd").html("<font color='red'>两次输入的密码不一致！</font>");
			    document.frm.checkPwd.focus();
		    }
		    else if(document.frm.userType.value == "")
		    {
			    $("#tdUserType").html("<font color='red'>请输入用户类型！</font>");
			    document.frm.userType.focus();
		    }
		    else
		    {
			    document.frm.submit();
		    }
	    }
	    function resetForm()
	    {
		    document.frm.reset();
	    }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="__APP__/AddUser/add">
    <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php include "Public/header.php" ;?></td>
      </tr>
      <tr>
        <td colspan="2" class="msgTd">后台管理：添加用户</td>
      </tr>
      <tr>
        <td width="150" bgcolor="#D3D6FF" valign="top">
        <?php include "Public/left.php" ;?></td>
        <td width="650" bgcolor="#ffffff" valign="top">
          <br><br>
          <table border="0" bgcolor="#6599FF" align="center" width="400" cellpadding="0" cellspacing="0">
            <tr>
              <td height="30">&nbsp;用户名：</td>
              <td><input type="text" name="userName" size="20" class="txt2"></td>
              <td id="tdName"></td>
            </tr>
            <tr>
              <td width="100" height="30">&nbsp;密码：</td>
              <td width="160"><input type="password" name="password" size="20" class="txt2"></td>
              <td width="140" id="tdPwd"></td>
            </tr>
            <tr>
              <td height="30">&nbsp;确认密码：</td>
              <td><input type="password" name="checkPwd" size="20" class="txt2"></td>
              <td id="tdCheckPwd"></td>
            </tr>
            <tr>
              <td height="30">&nbsp;用户类型：</td>
              <td><input type="text" name="userType" size="20" class="txt2"></td>
              <td id="tdUserType"></td>
            </tr>
            <tr>
              <td height="30">&nbsp;备注：</td>
              <td><input type="text" name="remark" size="20" class="txt2"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="30">&nbsp;</td>
              <td align="left">
                <a href="#" onclick="checkAdd()">添加</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="resetForm()">取消</a>
              </td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>