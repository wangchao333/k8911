<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../public/css/admin.css" type="text/css" rel="stylesheet" />
    <script language="javascript" src="__ROOT__/library/jquery/jquery-1.4.js"></script>
    <script language="javascript">
      function checkSearch()
      {
          if(document.frm.keyword.value == "")
          {
              alert("请输入搜索关键字！");
              document.frm.keyword.focus();
              return false;
          }
      }
      function nextPage(currentPage)
      {
          document.frm.searchType.value = "{$searchType}";
          document.frm.keyword.value = "{$keyword}";
          document.frm.currentPage.value = currentPage;
          document.frm.submit();
      }
      function delNews(articleId)
      {
          if(confirm("是否删除该新闻及所有评论？"))
          {
              window.location = "__APP__/ModNews/delete/articleId/"+articleId;
          }
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="__APP__/ModNews/index" onsubmit="return checkSearch()">
    <input type="hidden" name="currentPage" value="1">
    <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php include "Public/header.php" ;?></td>
      </tr>
      <tr>
        <td colspan="2" class="msgTd">后台管理：修改新闻</td>
      </tr>
      <tr>
        <td width="150" bgcolor="#D3D6FF" valign="top">
        	<?php include "Public/left.php" ;?></td>
        <td width="650" bgcolor="#ffffff" valign="top">
          <br><br>
          <table border="0" align="center" width="640" cellpadding="0" cellspacing="0">
            <tr>
              <td>
                &nbsp;&nbsp;&nbsp;新闻搜索：<input type="text" name="keyword" size="30" class="txt1">
                <select name="searchType">
                  <option value="title">标题</option>
                  <option value="content">内容</option>
                </select>
                <input type="image" src="../images/search.gif" align="absmiddle">
              </td>
            </tr>
          </table>
          <br>
          <table border="1" align="center" width="640" cellpadding="0" cellspacing="0">
            <tr>
              <td>新闻编号</td>
              <td>新闻类型</td>
              <td>发表时间</td>
              <td>新闻标题</td>
              <td>评论</td>
              <td>&nbsp;</td>
            </tr>
            <volist name="newsInfo" id="v">
            <tr>
              <td>{$v.articleId}</td>
              <td>{$v.typeName}</td>
              <td>{$v.dateandtime}</td>
              <td><a href="">{$v.title}</a></td>
              <td><a href="">查看评论</a></td>
              <td><a href="#" onclick="delNews({$v.articleId})">删除</a></td>
            </tr>
            </volist>
            <tr>
              <td colspan="6" align="left">
                <volist name="pageList" id="v">
                <a href="#" onclick="nextPage({$v})">[{$v}]</a>&nbsp;
                </volist>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>