<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../public/css/admin.css" type="text/css" rel="stylesheet" />
    <script language="javascript" src="../public/js/jquery.js"></script>
  </head>
  <body>
    <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php include "Public/header.php" ;?></td>
      </tr>
      <tr>
        <td colspan="2" class="msgTd">后台管理：首页</td>
      </tr>
      <tr>
        <td width="150" bgcolor="#D3D6FF" valign="top">
         <!-- 包含左侧 树桩列表 -->
       <?php include "Public/left.php" ;?>
        </td>
        <td width="650" bgcolor="#ffffff" valign="top">
          <br><br><br>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0">
            <tr>
              <td class="indexTd1">欢迎登陆天天网管理系统</td>
            </tr>
            <tr>
              <td class="indexTd2">您的权限是：{$_SESSION.userMsg.userType}</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>