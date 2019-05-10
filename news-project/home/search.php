
<!-- saved from url=(0045)http://127.0.0.1/news/index.php/Search/search -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>天天新闻网</title>
    
    <link href="../public/css/news.css" type="text/css" rel="stylesheet">
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
          document.frm.currentPage.value = currentPage;
          document.frm.searchType.value = "content";
          document.frm.keyword.value = " ";
          document.frm.submit();
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="../public/images/天天新闻网-4.html" onsubmit="return checkSearch()">
    <?php include "header.php"; ?>
    <div class="contentDiv">
      <div class="searchDiv">
        <div class="search1">新闻搜索</div>
        <div class="search2">
          &nbsp;搜索类型：
          <select name="searchType">
            <option value="title">标题</option>
            <option value="content">内容</option>
          </select>
          &nbsp;关键字：
          <input type="text" name="keyword" size="30" class="txt3">
          <input type="submit" value="Search" class="btn1">
        </div>
      </div>
      <div class="typeTitle clear">
        <div class="typeTitle1">
          <a href="http://127.0.0.1/news/index.php/Index/index" class="a">新闻主页</a> » 新闻搜索
        </div>
        <div class="typeTitle2">本次共搜索到10条新闻</div>
      </div>
      
      <div class="typeTitle3">
        &nbsp;<img src="../public/images/makealltop.gif">
        <a href="http://127.0.0.1/news/index.php/News/index/articleId/32">似懂非懂方法</a>
      </div><div class="typeTitle3">
        &nbsp;<img src="../public/images/makealltop.gif">
        <a href="http://127.0.0.1/news/index.php/News/index/articleId/19">世界第一黑客提出计算机安全十大建议 </a>
      </div><div class="typeTitle3">
        &nbsp;<img src="../public/images/makealltop.gif">
        <a href="http://127.0.0.1/news/index.php/News/index/articleId/20">北京IT小企业离职率高的原因 </a>
      </div>
      <div class="typeTitle3">
        &nbsp;当前显示第1页&nbsp;共4页&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://127.0.0.1/news/index.php/Search/search#" onclick="nextPage(1)">首页</a>&nbsp;&nbsp;&nbsp;
        <a href="http://127.0.0.1/news/index.php/Search/search#" onclick="nextPage(0)">上一页</a>&nbsp;&nbsp;&nbsp;
        <a href="http://127.0.0.1/news/index.php/Search/search#" onclick="nextPage(2)">下一页</a>&nbsp;&nbsp;&nbsp;
        <a href="http://127.0.0.1/news/index.php/Search/search#" onclick="nextPage(4)">尾页</a>&nbsp;&nbsp;&nbsp;
      </div>
      <br>
    </div>
    <!-- 页面脚注 -->
    <div class="footerDiv">
  网站简介 - 广告服务 - 网站地图 - 帮助信息 - 联系方式<br>
  Copyright © 2013 hys.com All Rights Reserved
</div>
    <input type="hidden" name="__hash__" value="4c2c2cedb47931b56266255651e27feb"></form>
  
<div id="wwei_dialog"></div></body></html>