<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 自定义导航栏 </title>
@extends('layouts.backend_layouts')
@section('content') 
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>自定义导航栏</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="nav.php" class="actionBtn">返回列表</a>自定义导航栏</h3>
            <script type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
    </script>
    <div class="idTabs">
      <ul class="tab">
        <li><a href="#nav_add">添加站内导航</a></li>
        <li><a href="#nav_defined">添加自定义链接</a></li>
      </ul>
      <div class="items">
        <div id="nav_add">
         <form action="nav.php?rec=insert" method="post">
          <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
           <tr>
            <td width="80" height="35" align="right">系统内容</td>
            <td>
             <select name="nav_menu" onchange="change('nav_name', this)">
              <option value="">请您选择链接项目</option>
                            <option value="page,1" title="公司简介">- 公司简介</option>
                            <option value="page,2" title="企业荣誉">-- 企业荣誉</option>
                            <option value="page,3" title="发展历程">-- 发展历程</option>
                            <option value="page,4" title="联系我们">-- 联系我们</option>
                            <option value="page,5" title="人才招聘">- 人才招聘</option>
                            <option value="page,6" title="营销网络">- 营销网络</option>
                            <option value="product_category,0" title="产品中心"> 产品中心</option>
                            <option value="product_category,1" title="电子数码">- 电子数码</option>
                            <option value="product_category,4" title="智能手机">-- 智能手机</option>
                            <option value="product_category,5" title="平板电脑">-- 平板电脑</option>
                            <option value="product_category,2" title="家居百货">- 家居百货</option>
                            <option value="product_category,3" title="母婴用品">- 母婴用品</option>
                            <option value="article_category,0" title="文章中心"> 文章中心</option>
                            <option value="article_category,1" title="公司动态">- 公司动态</option>
                            <option value="article_category,2" title="行业新闻">- 行业新闻</option>
                           </select>
            </td>
           </tr>
           <tr>
            <td width="80" height="35" align="right">导航名称</td>
            <td>
             <input type="text" id="nav_name" name="nav_name" value="" size="40" class="inpMain" />
            </td>
           </tr>
           <tr>
            <td height="35" align="right">位置</td>
            <td>
             <label for="type_0">
              <input type="radio" name="type" id="type_0" value="middle" checked="true" onChange="dou_callback('nav.php?rec=nav_select&id=', 'type', this.value, 'parent')">
              主导航</label>
             <label for="type_1">
              <input type="radio" name="type" id="type_1" value="top" onChange="dou_callback('nav.php?rec=nav_select&id=', 'type', this.value, 'parent')">
              顶部</label>
             <label for="type_2">
              <input type="radio" name="type" id="type_2" value="bottom" onChange="dou_callback('nav.php?rec=nav_select&id=', 'type', this.value, 'parent')">
              底部</label>
            </td>
           </tr>
           <tr>
            <td height="35" align="right">上级分类</td>
            <td id="parent">
             <select name="parent_id">
              <option value="0">无</option>
                            <option value="1"> 公司简介</option>
                            <option value="2">- 企业荣誉</option>
                            <option value="3">- 发展历程</option>
                            <option value="4">- 联系我们</option>
                            <option value="5"> 产品中心</option>
                            <option value="10">- 电子数码</option>
                            <option value="22">-- 智能手机</option>
                            <option value="23">-- 平板电脑</option>
                            <option value="11">- 家居百货</option>
                            <option value="12">- 母婴用品</option>
                            <option value="6"> 文章中心</option>
                            <option value="13">- 公司动态</option>
                            <option value="14">- 行业新闻</option>
                            <option value="7"> 营销网络</option>
                            <option value="15"> 企业荣誉</option>
                            <option value="8"> 人才招聘</option>
                            <option value="9"> 联系我们</option>
                           </select>
            </td>
           </tr>
           <tr>
            <td height="35" align="right">排序</td>
            <td>
             <input type="text" name="sort" value="50" size="5" class="inpMain" />
            </td>
           </tr>
           <tr>
            <td></td>
            <td>
             <input type="hidden" name="token" value="30fa081a" />
             <input name="submit" class="btn" type="submit" value="提交" />
            </td>
           </tr>
          </table>
         </form>
        </div>
        <div id="nav_defined">
         <form action="nav.php?rec=insert" method="post">
          <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
           <tr>
            <td width="80" height="35" align="right">导航名称</td>
            <td>
             <input type="text" name="nav_name" value="" size="40" class="inpMain" />
            </td>
           </tr>
           <tr>
            <td height="35" align="right">位置</td>
            <td>
             <label for="type_0">
 <input type="radio" name="type" id="type_0" value="middle" checked="true" onChange="dou_callback('nav.php?rec=nav_select&id=', 'type', this.value, 'parent_external')">
 主导航</label>
<label for="type_1">
 <input type="radio" name="type" id="type_1" value="top" onChange="dou_callback('nav.php?rec=nav_select&id=', 'type', this.value, 'parent_external')">
 顶部</label>
<label for="type_2">
 <input type="radio" name="type" id="type_2" value="bottom" onChange="dou_callback('nav.php?rec=nav_select&id=', 'type', this.value, 'parent_external')">
 底部</label>
            </td>
           </tr>
           <tr>
            <td height="35" align="right">链接地址</td>
            <td>
             <input type="text" name="guide" value="" size="80" class="inpMain" />
            </td>
           </tr>
           <tr>
            <td height="35" align="right">上级分类</td>
            <td id="parent_external">
             <select name="parent_id">
              <option value="0">无</option>
                            <option value="1"> 公司简介</option>
                            <option value="2">- 企业荣誉</option>
                            <option value="3">- 发展历程</option>
                            <option value="4">- 联系我们</option>
                            <option value="5"> 产品中心</option>
                            <option value="10">- 电子数码</option>
                            <option value="22">-- 智能手机</option>
                            <option value="23">-- 平板电脑</option>
                            <option value="11">- 家居百货</option>
                            <option value="12">- 母婴用品</option>
                            <option value="6"> 文章中心</option>
                            <option value="13">- 公司动态</option>
                            <option value="14">- 行业新闻</option>
                            <option value="7"> 营销网络</option>
                            <option value="15"> 企业荣誉</option>
                            <option value="8"> 人才招聘</option>
                            <option value="9"> 联系我们</option>
                           </select>
            </td>
           </tr>
           <tr>
            <td height="35" align="right">排序</td>
            <td>
             <input type="text" name="sort" value="50" size="5" class="inpMain" />
            </td>
           </tr>
           <tr>
            <td></td>
            <td>
             <input type="hidden" name="token" value="30fa081a" />
             <input type="hidden" name="nav_menu" value="nav,0" />
             <input name="submit" class="btn" type="submit" value="提交" />
            </td>
           </tr>
          </table>
         </form>
        </div>
      </div>
    </div>
           </div>
 </div>
 <div class="clear"></div>
@stop
</body>
</html>