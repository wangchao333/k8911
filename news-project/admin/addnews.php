<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../public/css/admin.css" type="text/css" rel="stylesheet" />
    <script language="javascript" src="__ROOT__/library/jquery/jquery-1.4.js"></script>
    <script language="javascript" src="__ROOT__/library/ckeditor/ckeditor.js"></script>
    <script language="javascript">
	    var editor
	    function initEditor()
	    {
	        editor = CKEDITOR.replace("content",{
	            wdith:"650px",
	            height:"200px",
	            toolbar:"Basic",
	            skin:"v2"
	        });
	    }
	    function checkWrite()
	    {
		    if(document.frm.title.value == "")
		    {
			    alert("请输入新闻标题！");
			    document.frm.title.focus();
		    }
		    else if(editor.getData() == "")
		    {
			    alert("请输入新闻内容！");
			    editor.focus();
		    }
		    else
		    {
			    document.frm.submit();
		    }
	    }
	    function resetForm()
	    {
		    document.frm.reset();
		    editor.setData("");
	    }
    </script>
  </head>
  <body onload="initEditor()">
    <form name="frm" method="post" action="__APP__/AddNews/add" enctype="multipart/form-data">
    <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php include "Public/header.php" ;?></td>
      </tr>
      <tr>
        <td colspan="2" class="msgTd">后台管理：添加新闻</td>
      </tr>
      <tr>
        <td width="150" bgcolor="#D3D6FF" valign="top">
        <?php include "Public/left.php" ;?></td>
        <td width="650" bgcolor="#ffffff" valign="top">
          <br><br>
          <table border="0" bgcolor="#DCDCDC" align="center" width="600" cellpadding="0" cellspacing="0">
            <tr>
              <td height="30">&nbsp;新闻标题：</td>
              <td><input type="text" name="title" size="20" class="txt1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp;新闻类型：</td>
              <td>
                <select name="typeId">
                  <volist name="newsTypes" id="v">
                  <option value="{$v.typeId}">{$v.typeName}</option>
                  </volist>
                </select>
              </td>
            </tr>
            <tr>
              <td height="30">&nbsp;新闻图片：</td>
              <td><input type="file" name="myFile" size="20" class="txt1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp;新闻作者：</td>
              <td><input type="text" name="writer" size="20" class="txt1"></td>
            </tr>
            <tr>
              <td height="30">&nbsp;新闻来源：</td>
              <td><input type="text" name="source" size="20" class="txt1"></td>
            </tr>
            <tr>
              <td colspan="2"><textarea name="content"></textarea></td>
            </tr>
            <tr>
              <td height="30">&nbsp;</td>
              <td align="left">
                <a href="#" onclick="checkWrite()">添加</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="resetForm()">取消</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>