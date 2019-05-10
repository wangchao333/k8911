<script language="javascript" src="../public/js/dtree/js/dtree.js"></script>
<script language="javascript"> 
      function dtree()
      {
        d = new dTree('d','admin');
        d.add(0,-1,'重新登陆','javascript:logout()');
        d.add(1,0,'新闻管理','');
        d.add(11,1,'添加新闻','addnews.php');
        d.add(12,1,'查看新闻','modnews.php');
        d.add(2,0,'分类管理','');
        d.add(21,2,'添加分类','addtype.php');
        d.add(22,2,'修改分类','modtype.php'); 
        d.add(3,0,'用户管理','');
        d.add(31,3,'添加用户','addusers.php');
        d.add(4,0,'返回主页','index.php');
        document.write(d);
      }
      dtree();
</script>
