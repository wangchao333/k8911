<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../public/css/admin.css" type="text/css" rel="stylesheet" />
    <script language="javascript" src="__ROOT__/library/jquery/jquery-1.4.js"></script>
    <script language="javascript">
      var oldBgColor = "";
      var oldTypeId = "";
      var oldTypeName = "";
      var oldArticleNums = "";
      var oldLink = "";
      function deleteNewsType(typeId)
      {
          if(confirm("是否删除该分类及该分类下所有新闻?"))
          {
              window.location = "__APP__/ModType/delete/typeId/"+typeId;
          }
      }
      function showText(id)
      {
          cancleText();
          oldTypeId = id;
          oldBgColor = $("#td"+id+"0").css("background-color");
          oldTypeName = $("#td"+id+"1").html();
          oldArticleNums = $("#td"+id+"2").html();
          oldLink = $("#td"+id+"3").html();

          $("#td"+id+"0").css("background-color","#507CD3");
          $("#td"+id+"1").html("<input type='text' name='typeName' size='20' class='txt1' value='"+oldTypeName+"'>");
          $("#td"+id+"2").html("<input type='text' name='articleNums' size='20' class='txt1' value='"+oldArticleNums+"'>");
          $("#td"+id+"3").html("<a href='#' onclick='submitForm()'>更新</a>   <a href='#' onclick='cancleText()'>取消</a>");
      }
      function cancleText()
      {
          if(oldTypeId != "")
          {
        	  $("#td"+oldTypeId+"0").css("background-color",oldBgColor);
        	  $("#td"+oldTypeId+"1").html(oldTypeName);
        	  $("#td"+oldTypeId+"2").html(oldArticleNums);
        	  $("#td"+oldTypeId+"3").html(oldLink);
        	  oldTypeId = "";
        	  oldTypeName = "";
        	  oldArticleNums = "";
          }
      }
      function submitForm()
      {
          var pattern = /^\d+$/;
          if(document.frm.typeName.value == "")
          {
              alert("请输入分类名称！");
              document.frm.typeName.focus();
          }
          else if(!pattern.test(document.frm.articleNums.value))
          {
              alert("请输入一个数字！");
              document.frm.articleNums.focus();
          }
          else
          {
              document.frm.action = "__APP__/ModType/update/typeId/"+oldTypeId;
              document.frm.submit();
          }
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="__APP__/ModType/update">
    <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php include "Public/header.php" ;?></td>
      </tr>
      <tr>
        <td colspan="2" class="msgTd">后台管理：修改分类</td>
      </tr>
      <tr>
        <td width="150" bgcolor="#D3D6FF" valign="top">
        	<?php include "Public/left.php" ;?></td>
        <td width="650" bgcolor="#ffffff" valign="top">
          <br><br>
          <table border="0" align="center" width="600" cellpadding="0" cellspacing="0">
            <tr>
              <td class="modtype1" width="200">类别名称</td>
              <td class="modtype1" width="200">新闻数</td>
              <td class="modtype1" width="200">&nbsp;</td>
            </tr>

            <volist name="newsTypes" id="v">
            <tr id="td{$v.typeId}0">
              <td id="td{$v.typeId}1" class="modtype2" width="200">{$v.typeName}</td>
              <td id="td{$v.typeId}2" class="modtype2" width="200">{$v.articleNums}</td>
              <td id="td{$v.typeId}3" class="modtype2" width="200"><a href="#" onclick="showText({$v.typeId})">编辑</a>   <a href="#" onclick="deleteNewsType({$v.typeId})">删除</a></td>
            </tr>
            </volist>

          </table>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>