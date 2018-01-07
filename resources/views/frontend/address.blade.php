@extends('layouts.frontend_layouts')
@section('content')
<base href="/frotend/">
<script type="text/javascript" src="frotend/js/jquery.js" ></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".lian").change(function(){
            $(".lian3").hide();
            var code = $(this).val();
            var obj = $(this);
            $.ajax({
                type: "GET",
                url: "{{url('/address/add')}}",
                data: {code:code},
                success: function(data) {
                    var str = "<option>请选择</option>";
                    $.each(data,function(k,v){
                        str += "<option value='"+ v.code+"'>"+v.name+"</option>";
                    });
                    $(".lian2").html(str);
                    $(".lian2").show();
                },
                error: function () {
                    alert("系统错误，请联系系统运维");//
                }
            });
        });

        $(".lian2").change(function(){
            var code = $(this).val();
            var obj = $(this);
            $.ajax({
                type: "GET",
                url: "{{url('/address/add')}}",
                data: {code:code},
                success: function(data) {
                    var str = "<option>请选择</option>";
                    $.each(data,function(k,v){
                        str += "<option value='"+ v.code+"'>"+v.name+"</option>";
                    });
                    $(".lian3").html(str);
                    $(".lian3").show();
                },
                error: function () {
                    alert("系统错误，请联系系统运维");//
                }
            });
        });
    });
</script>

<script type="text/javascript">
    jQuery(function(){
        jQuery("#new_add_shdz_btn").toggle(function(){
            jQuery("#new_add_shdz_contents").show(500);
        },function(){
            jQuery("#new_add_shdz_contents").hide(500);
        });
    });
</script>
	<title>管理收货地址</title>

	<div class="clear"></div>
	<!-- 面包屑 注意首页没有 -->
	<div class="shop_hd_breadcrumb">
		<strong>当前位置：</strong>
		<span>
			<a href="">首页</a>&nbsp;›&nbsp;
			<a href="">我的商城</a>&nbsp;›&nbsp;
			<a href="">已买到商品</a>
		</span>
	</div>
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->

	<!-- 我的个人中心 -->
	<div class="shop_member_bd clearfix">
		<!-- 左边导航 -->
		<div class="shop_member_bd_left clearfix">

			<div class="shop_member_bd_left_pic">
				<a href="javascript:void(0);"><img src="frontend/images/avatar.png" /></a>
			</div>
			<div class="clear"></div>

			<dl>
				<dt>我的交易</dt>
				<dd><span><a href="">已购买商品</a></span></dd>
				<dd><span><a href="">我的收藏</a></span></dd>
				<dd><span><a href="">评价管理</a></span></dd>
			</dl>

			<dl>
				<dt>我的账户</dt>
				<dd><span><a href="">个人资料</a></span></dd>
				<dd><span><a href="">密码修改</a></span></dd>
				<dd><span><a href="">收货地址</a></span></dd>
			</dl>

		</div>
		<!-- 左边导航 End -->

		<!-- 右边购物列表 -->
		<div class="shop_member_bd_right clearfix">

			<div class="shop_meber_bd_good_lists clearfix">
				<div class="title"><h3>管理收货地址<a style="float:right;" href="javasrcipt:void(0);" id="new_add_shdz_btn">新增收货地址</a></h3></div>
				<div class="clear"></div>
			<!-- 收货人地址 Title End -->
			<div class="shop_bd_shdz clearfix">
				<!-- 新增收货地址 -->
                <div id="new_add_shdz_contents" style="display:none;" class="shop_bd_shdz_new clearfix">
                    <div class="title">新增收货地址</div>
                    <div class="shdz_new_form">
                        <form action="/new_insert" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}" />
                            <ul>
                                <li><label for=""><span>*</span>收货人姓名：</label><input type="text" name="consignee" class="name" /></li>
                                <li><label for=""><span>*</span>收货人email：</label><input type="text" name="email" class="name" /></li>
                                <li><label for=""><span>*</span>所在地址：</label>
                                    <select class="lian" name="country">
                                        <option value="">请选择</option>
                                        @foreach($data as $v)
<!--                                        <option value="{{$v->code}}">{{$v->name}}</option>-->
                                        @endforeach
                                    </select>
                                    <select class="lian2" name="province" style="display:none">
                                    </select>
                                    <select class="lian3" name="city" style="display:none">
                                    </select>
                                </li>
                                <li><label for=""><span>*</span>详细地址：</label><textarea class="xiangxi" name="address"></textarea></li>
                                <li><label for=""><span></span>邮政编码：</label><input type="text" class="youbian" name="zipcode"/></li>
                                <li><label for=""><span></span>手机号：</label><input type="text" name="mobile" class="shouji" /></li>
                                <li><label for="">&nbsp;</label><input type="submit" value="增加收货地址" /></li>
                            </ul>
                        </form>
                    </div>
                </div>
				<!-- 新增收货地址 End -->
                <!--收货地址展示-->
                <div class="shop_bd_shdz_lists clearfix">
                    <table style="width: 750px; height: 200px;">
                        <tr style="background-color: #dcdcdc; font-size: 20px; ">
                            <td>收货人</td>
                            <td>所在地区</td>
                            <td>详细地址</td>
                            <td>邮编</td>
                            <td>电话/手机</td>
                            <td>操作</td>
                        </tr>
                        @foreach($info as $v)
                        <tr>

                            <td>{{$v->consignee}}</td>
                            <td> <center>{{$v->country .'&nbsp;&nbsp;&nbsp;'.$v->province.'&nbsp;&nbsp;&nbsp;'.$v->city}}</center></td>
                            <td>{{$v->address}}</td>
                            <td>{{$v->zipcode}}</td>
                            <td>{{$v->mobile}}</td>
                            <td>
                                <a href="#">编辑</a>
                                <a href="#">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!--收货地址展示 End-->
			</div>
			<div class="clear"></div>
			</div>
		</div>
		<!-- 右边购物列表 End -->

	</div>
	@stop