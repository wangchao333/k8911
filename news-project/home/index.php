
<!-- saved from url=(0022)http://127.0.0.1/news/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>天天新闻网</title>
    
    <link href="../public/css/news.css" type="text/css" rel="stylesheet">
    <script language="javascript">
      function changeImg()
      {
          document.getElementById("checkImg").src = "../public/images/verify.php?id="+<?php echo mt_rand(10000,99999);?>;
      }
      function checkLogin()
      {
          if(document.frm.userName.value == "")
          {
              alert("请输入用户名！");
              document.frm.userName.focus();
              return false;
          }
          else if(document.frm.password.value == "")
          {
              alert("请输入密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.checkCode.value == "")
          {
              alert("请输入验证码！");
              document.frm.checkCode.focus();
              return false;
          }
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="http://127.0.0.1/news/index.php/Index/login" onsubmit="return checkLogin()">
     <?php include "header.php"; ?>
    <div class="contentDiv clear">
      <!-- 左侧div -->
      <div class="leftDiv">
        <!-- 登陆 -->
        <div class="loginDiv">
          <div class="login1">会员登陆</div>
          <div class="login2 clear">
            <div class="login3">用户名</div>
            <div class="login4"><input type="text" name="userName" class="txt1" value="admin">*</div>
          </div>
          <div class="login2 clear">
            <div class="login3">密&nbsp;&nbsp;码</div>
            <div class="login4"><input type="password" name="password" class="txt1" value="123">*</div>
          </div>
          <div class="login2 clear">
            <div class="login3">验证码</div>
            <div class="login4"><input type="text" name="checkCode" maxlength="4" class="txt2"><img id="checkImg" src="../public/images/verify.php" align="absmiddle" onclick="changeImg()" title="看不清换一张" alt="看不清换一张">*</div>
          </div>
          <div class="login2 clear">
            <div class="login3">&nbsp;</div>
            <div class="login4"><input type="submit" value="登陆" class="btn1"></div>
          </div>
        </div>
        <!-- 一个新闻分类带两条新闻 -->

        <div class="typeDiv clear">
          <div class="type1"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/1" class="a">国内新闻</a></div>
          <div class="type2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/1" class="a">更多»</a></div>
        </div>
        <div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="content.php">赵丽颖和冯绍峰即将结婚 </a></div>
        <div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="content.php"> </a></div><div class="typeDiv clear">
          <div class="type1"><a href="content.php" class="a">体育新闻</a></div>
          <div class="type2"><a href="content.php" class="a">更多»</a></div>
        </div>
        <div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="content.php">北京IT小企业离职率高的原因 </a></div>
        <div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/22">NBA史上最强阵容:邓肯最佳...</a></div><div class="typeDiv clear">
          <div class="type1"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/3" class="a">国际新闻</a></div>
          <div class="type2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/3" class="a">更多»</a></div>
        </div>
        <div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/25">海地地震</a></div><div class="typeDiv clear">
          <div class="type1"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4" class="a">科技新闻</a></div>
          <div class="type2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4" class="a">更多»</a></div>
        </div>
        <div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/30">山东游客随地大小便一进一退建...</a></div><div class="type3"><img src="../public/images/makealltop.gif">&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/29">山东井盖屡次失窃</a></div>
        <br>
      </div>
      <!-- 右侧div -->
      <div class="rightDiv">
        <!-- 热点要闻 -->
        <div class="hotDiv">热点要闻</div>

	    <div class="hot1">
          [<a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/1">国内新闻</a>]&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/20">北京IT小企业离职率高的原因 </a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
        </div>
        <div class="hot1">
          [<a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/2">体育新闻</a>]&nbsp;
          <a href="http://127.0.0.1/news/index.php/News/index/articleId/22">NBA史上最强阵容:邓肯最佳大前 奥尼尔挤掉张伯伦</a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
            <a href="http://127.0.0.1/news/index.php/News/index/articleId/22">NBA史上最强阵容:邓肯最佳大前 奥尼尔挤掉张伯伦</a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
        </div>
        <div class="hot1">
          [<a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/3">国际新闻</a>]&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/25">海地地震</a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
        </div><div class="hot1">
          [<a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4">科技新闻</a>]&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/19">世界第一黑客提出计算机安全十大建议 </a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
        </div><div class="hot1">
          [<a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4">科技新闻</a>]&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/21">中国IT企业的竞争力下降了吗？</a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
        </div><div class="hot1">
          [<a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4">科技新闻</a>]&nbsp;<a href="http://127.0.0.1/news/index.php/News/index/articleId/23">网络经济，谁主沉浮？</a>&nbsp;2015-12-04 15:15:55&nbsp;<img src="../public/images/new1.gif">
        </div>
        <!-- 新闻分类导航 -->
        <div class="hotDiv">新闻分类导航</div>
        <div class="newsType1 clear">
          <div class="newsType2">新闻总数：</div>
          <div class="newsType3">12</div>
          <div class="newsType4">&nbsp;</div>
        </div>

        <div class="newsType1 clear">
          <div class="newsType2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/1">国内新闻：</a></div>
          <div class="newsType3">7</div>
          <div class="newsType4"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/1"><img src="../public/images/sch.gif" border="0"></a></div>
        </div><div class="newsType1 clear">
          <div class="newsType2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/2">体育新闻：</a></div>
          <div class="newsType3">6</div>
          <div class="newsType4"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/2"><img src="../public/images/sch.gif" border="0"></a></div>
        </div><div class="newsType1 clear">
          <div class="newsType2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/3">国际新闻：</a></div>
          <div class="newsType3">10</div>
          <div class="newsType4"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/3"><img src="../public/images/sch.gif" border="0"></a></div>
        </div><div class="newsType1 clear">
          <div class="newsType2"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4">科技新闻：</a></div>
          <div class="newsType3">9</div>
          <div class="newsType4"><a href="http://127.0.0.1/news/index.php/NewsTypes/index/typeId/4"><img src="../public/images/sch.gif" border="0"></a></div>
        </div>
      </div>
    </div>
    <!-- 页面脚注 -->
    <div class="footerDiv">
  网站简介 - 广告服务 - 网站地图 - 帮助信息 - 联系方式<br>
  Copyright © 2013 hys.com All Rights Reserved
</div>
    <input type="hidden" name="__hash__" value="49c846884e2fa2f43c3b6f876ce89bfa"></form>
  
<div id="wwei_dialog"></div></body></html>