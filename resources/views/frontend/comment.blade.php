@extends('layouts.frontend_layouts')
@section('content')	
	<title>评价管理</title>
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
				<div class="title"><h3>订单列表</h3></div>
				<table>
					<thead class="tab_title">
						<th style="width:80px;"><span>&nbsp;</span></th>
						<th style="width:320px;"><span>评价内容</span></th>
						<th style="width:180px;"><span>评价人</span></th>
						<th style="width:100px;"><span>宝贝信息</span></th>
						<th style="width:115px;"><span>操作</span></th>
					</thead>
					<tbody>

						<tr><td colspan="5">
							<table class="good" style="height:50px">
								<tbody>
									<tr>
										<td class="pingjia_pic"><span class="pingjia_type pingjia_type_1"></span></td>
										<td class="pingjia_title"><span><a href=""> 好评！</a></span><br />[2012-12-01 19:55:37]</td>
										<td class="pingjia_danjia"><strong>wanglele</strong></td>
										<td class="pingjia_shuliang"><a href="">金士顿TF 8G卡</a><br />99.00元</td>
										<td class="pingjia_caozuo"><a href="">删除</a></td>
									</tr>
								</tbody>
							</table>
						</td></tr>

						<tr><td colspan="5">
							<table class="good" style="height:50px">
								<tbody>
									<tr>
										<td class="pingjia_pic"><span class="pingjia_type pingjia_type_2"></span></td>
										<td class="pingjia_title"><span><a href=""> 中评！</a></span><br />[2012-12-01 19:55:37]</td>
										<td class="pingjia_danjia"><strong>wanglele</strong></td>
										<td class="pingjia_shuliang"><a href="">金士顿TF 8G卡</a><br />99.00元</td>
										<td class="pingjia_caozuo"><a href="">删除</a></td>
									</tr>
								</tbody>
							</table>
						</td></tr>

						<tr><td colspan="5">
							<table class="good" style="height:50px">
								<tbody>
									<tr>
										<td class="pingjia_pic"><span class="pingjia_type pingjia_type_3"></span></td>
										<td class="pingjia_title"><span><a href=""> 差评！</a></span><br />[2012-12-01 19:55:37]</td>
										<td class="pingjia_danjia"><strong>wanglele</strong></td>
										<td class="pingjia_shuliang"><a href="">金士顿TF 8G卡</a><br />99.00元</td>
										<td class="pingjia_caozuo"><a href="">删除</a></td>
									</tr>
								</tbody>
							</table>
						</td></tr>



					</tbody>
				</table>
			</div>
		</div>
		<!-- 右边购物列表 End -->

	</div>
	<!-- 我的个人中心 End -->
@stop
