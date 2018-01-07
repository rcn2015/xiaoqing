<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
     <div class="drop mTopad"><a href="/Product">商品</a> 
   <!--   <a href="article.php?rec=add">文章</a>  -->
       <a href="/admin/Article">文章</a> 
     <a href="/admin/Nav">自定义导航</a>
      <a href="/admin/Show">首页幻灯</a>
       <a href="/admin/Page">单页面</a> 
       <a href="/admin/Manager">管理员</a> 
       <a href="link.html"></a> </div>
    </li>
    <li><a href="../index.php" target="_blank">查看站点</a></li>
    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
    <li class="noRight"><a href="/admin/Module">DouPHP+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="/admin/Login">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --><div id="dcLeft"><div id="menu">


 <ul class="top">
  <li><a href="/admin/Index"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
 <ul>
  <li><a href="/admin/System"><i class="system"></i><em>系统设置</em></a></li>
  <li><a href="/admin/Nav"><i class="nav"></i><em>自定义导航栏</em></a></li>
  <li><a href="/admin/Show"><i class="show"></i><em>首页幻灯广告</em></a></li>
  <li><a href="/admin/Page"><i class="page"></i><em>单页面管理</em></a></li>
 </ul>
   <ul>
  <li><a href="/admin/Product_category"><i class="productCat"></i><em>商品分类</em></a></li>
  <li><a href="/admin/Product"><i class="product"></i><em>商品列表</em></a></li>
 </ul>
  <ul>
  <li><a href="/admin/Article_category"><i class="articleCat"></i><em>品牌分类</em></a></li>
  <li><a href="/admin/Article"><i class="article"></i><em>品牌列表</em></a></li>
 </ul>
   <ul class="bot">
  <li><a href="/admin/Backup"><i class="backup"></i><em>数据备份</em></a></li>
  <li><a href="/admin/Mobile"><i class="mobile"></i><em>手机版</em></a></li>
  <li><a href="/admin/Theme"><i class="theme"></i><em>设置模板</em></a></li>
  <li><a href="/admin/Manager"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="/admin/Manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
@yield('content')

<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>