@extends('layouts.frontend_layouts')
@section('content')	

	<title>编辑收货地址</title>
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
				<a href="javascript:void(0);"><img src="images/avatar.png" /></a>
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
				<div class="title"><h3>编辑收货地址</h3></div>
				<div class="clear"></div>
				<dic class="shop_home_form">
					<form athion="" name="" class="shop_form" method="post">
						<ul>
							<li><label><span>*</span>收货人姓名：</label><input type="text" class="form-text" value="望乐乐" /></li>
							<li><label><span>*</span>所在地：</label><input type="text" class="form-text" value="中国" /></li>
							<li><label>详细地址：</label>
									<select>
										<option value="">北京</option>
									</select>
									<select>
										<option value="">北京</option>
									</select>
									<select>
										<option value="">昌平</option>
									</select>
							</li>
							<li><label>邮编：</label><input type="text" class="form-text" value="100000" /></li>
							<li><label>电话：</label><input type="text" class="form-text" value="101-888888" /></li>
							<li><label>手机号：</label><input type="text" class="form-text" value="13366992329" /></li>
							<li class="bn"><label>&nbsp;</label><input type="submit" class="form-submit" value="保存修改" /></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		<!-- 右边购物列表 End -->

	</div>
	<!-- 我的个人中心 End -->
@stop