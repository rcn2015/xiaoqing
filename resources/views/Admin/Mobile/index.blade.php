
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 仓库管理 </title>
@extends('layouts.backend_layouts')
@section('content') 
<style>
#example1 {
    background-image: '1.gif';
    background-position: right bottom, left top;
    background-repeat: no-repeat, repeat;
    padding: 15px;
}
</style>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>仓库添加</strong> </div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/admin/Theme" class="actionBtn">仓库列表</a>仓库添加</h3>

    <form action="{{url('admin/Mobile/add')}}" method="post">
    {!!csrf_field() !!}
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="80" class="cang" align="right">仓库名称</td><span></span>
                    <td>
                        <input type="text" name="region_name" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right">请选择地区</td>
                    <td>
                        <select  id="province" name="province" onchange="selcity(this.value,this.id)">  
                        <option value="">请选择</option>  
                           <?php foreach($province as $k=>$v) {?>  
                                <option  value="<?=$v['code']?>"><?=$v['name']?></option>  
                           <?php } ?> 
                        </select> 

                        <select  id="city" name="city" onchange="selcity(this.value,this.id)">  
                           <option value="">请选择</option>  
                        </select> 

                        <select  id="country" name="country">  
                           <option value="">请选择</option>  
                        </select>
                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td>
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
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/sanji.js"></script>