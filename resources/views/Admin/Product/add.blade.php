<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 添加商品 </title>
@extends('layouts.backend_layouts')
@section('content') 
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加商品</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="product.html" class="actionBtn">商品列表</a>添加商品</h3>
    <form action="/admin/Productadd" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">商品名称</td>
       <td>
        <input type="text" name="name" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">商品分类</td>
       <td>
        <select name="good_cat">
         <option value="0">未分类</option>
            @foreach($data as $v)
            <option value="{{$v->cat_id}}">{{$v->cat_name}}</option>
            @endforeach
            </select>
       </td>
      </tr>
      <tr>
       <td align="right">商品价格</td>
       <td>
        <input type="text" name="price" value="0" size="40" class="inpMain" />
       </td>
      </tr>
            <tr>
       <td align="right" valign="top">商品描述</td>
       <td>
        <!-- KindEditor -->
			<link rel="stylesheet" href="js/kindeditor/themes/default/default.css" />
			<link rel="stylesheet" href="js/kindeditor/plugins/code/prettify.css" />
			<script charset="utf-8" src="js/kindeditor/kindeditor.js"></script>
			<script charset="utf-8" src="js/kindeditor/lang/zh_CN.js"></script>
			<script charset="utf-8" src="js/kindeditor/plugins/code/prettify.js"></script>
        <script>
					KindEditor.ready(function(K) {
						var editor1 = K.create('textarea[name="content"]', {
							cssPath : '../plugins/code/prettify.css',
							uploadJson : '../php/upload_json.php',
							fileManagerJson : '../php/file_manager_json.php',
							allowFileManager : true,
							afterCreate : function() {
								var self = this;
								K.ctrl(document, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
								K.ctrl(self.edit.doc, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
							}
						});
						prettyPrint();
					});
			</script>
        <!-- /KindEditor -->
        <textarea id="content" name="content" style="width:780px;height:400px;" class="textArea"></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>
        <input type="file" name="image" size="38" class="inpFlie" />
        <img src="images/icon_no.png"></td>
      </tr>
      <tr>
       <td align="right">关键字</td>
       <td>
        <input type="text" name="keywords" value="" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <input type="text" name="description" value="" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="21307217" />
        <input type="hidden" name="id" value="">
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
           </div>
 </div>
 <div class="clear"></div>
@stop
</body>
</html>
