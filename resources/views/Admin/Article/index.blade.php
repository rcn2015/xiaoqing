<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 品牌列表 </title>
@extends('layouts.backend_layouts')
@section('content') 
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>品牌列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="/admin/Addarticle" class="actionBtn add">添加品牌</a>品牌列表</h3>
    <div class="filter">
    <form action="article.php" method="post">
     <select name="cat_names">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
      </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
        <a class="btnGray" href="article.php?rec=sort">开始筛选首页品牌</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="article.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center">编号</th>
      <th align="left">品牌名称</th>
      <th width="150" align="center">品牌分类</th>
      <th width="80" align="center">品牌描述</th>
      <th width="80" align="center">品牌logo</th>

      <th width="80" align="center">操作</th>
     </tr>

<?php foreach($data as $k=>$v) {?>
      <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="10" /></td>
      <td align="center"><?php echo $v->brand_id?></td>
      <td><a href="article.php?rec=edit&id=10"><?php echo $v->title?></a></td>
      <td align="center"><?php echo $v->cat_name?></td>
      <td align="center"><?php echo $v->content?></td>
      <td align="center">
      <a href="article.php?rec=edit&id=10">编辑</a> | 
      <a href="article.php?rec=del&id=10">删除</a></td>              
            
     </tr>
     <?php }?>


         </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
                 </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 10 个记录，共 1 页，当前第 1 页 | <a href="article.php?page=1">第一页</a> 上一页 下一页 <a href="article.php?page=1">最末页</a></div>           </div>
 </div>
 <div class="clear"></div>
@stop
 <script type="text/javascript">
 
 onload = function()
 {
   document.forms['action'].reset();
 }

 function douAction()
 {
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
 </script>
</body>
</html>