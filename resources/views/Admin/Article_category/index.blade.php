
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 品牌分类 </title>
@extends('layouts.backend_layouts')
@section('content') 
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>品牌分类</strong> </div> 
  <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="/admin/Add_article" class="actionBtn add">添加分类</a>品牌分类</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="120" align="left">分类名称</th>
      <th align="left">别名</th>
      <th align="left">简单描述</th>
      <th align="left">关键字</th>
       <th width="60" align="center">排序</th>
      <th width="80" align="center">操作</th>
      </tr>
        <?php foreach($data as $k=>$v){?>
        <tr>
          <td><?php echo $v->cat_name?></td>
          <td><?php echo $v->unique_id?></td>
          <td><?php echo $v->keywords?></td>
          <td><?php echo $v->description?></td>
          <td><?php echo $v->sort?></td>
          <td><a href="/admin/Del?id={{$v->cat_id}}">删除</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="/admin/Update?id={{$v->cat_id}}">修改</a>

          </td>
        </tr>
        <?php }?>
          </table>
           </div>
 </div>
 <div class="clear"></div>
@stop
</body>
</html>