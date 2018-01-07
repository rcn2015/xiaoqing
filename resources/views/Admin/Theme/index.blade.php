
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 仓库管理 </title>
@extends('layouts.backend_layouts')
@section('content') 
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>仓库管理</strong> </div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
  <h3><a href="/admin/Mobile" class="actionBtn">添加仓库</a>仓库列表</h3>
<table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="120" align="left">仓库ID</th>
            <th align="left">仓库名称</th>
            <th align="left">仓库地区</th>
            <th align="left">仓库状态</th>
            <th width="80" align="center">操作</th>
        </tr>
        <?php foreach ($data as $k=>$v) { ?>
            <tr>
                <td><?=$v['c_id']?></td>
                <td><?=$v['c_name']?></td>
                <td><?=$v['province']?></td>
                <td>
                <?php if($v['status']==0)
                  {
                    echo "正常";
                  }else{
                    echo "仓库已满";
                  }
                ?>
                </td>
                <td><a href="{{url('admin/theme/delete',['id',$v['c_id']])}}">删除</a></td>
            </tr>
        <?php }?>
    </table>
 </div>
 </div>
 <div class="clear"></div>
@stop
</body>
</html>