@extends('layouts.frontend_layouts')
@section('content')	
<title>订单</title>
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
						<th style="width:410px;"><span>商品信息</span></th>
						<th style="width:100px;"><span>单价</span></th>
						<th style="width:80px;"><span>数量</span></th>
						<th style="width:100px;"><span>订单总价</span></th>
						<th style="width:115px;"><span>状态与操作</span></th>
					</thead>
					<tbody>

						<tr><td colspan="5">
							<table class="good">
								<thead >
									<tr><th colspan="6">
										<span><strong>订单号码：</strong>2013032905510051</span>
									</th></tr>
								</thead>
								<tbody>
									<tr>
										<td class="dingdan_pic"><img src="images/1dbc94fa0d60cba3990b89ccb01f82c2.jpg_tiny.jpg" /></td>
										<td class="dingdan_title"><span><a href="">李宁 lining 专柜正品 足球鞋 女式运动鞋【演示数据】</a></span><br />鞋码:37 颜色:黑色 </td>
										<td class="dingdan_danjia">￥<strong>25.00</strong></td>
										<td class="dingdan_shuliang">1</td>
										<td class="dingdan_zongjia">￥<strong>25.00</strong><br />(免运费)</td>
										<td class="digndan_caozuo"><a href="">等待买家付款</a></td>
									</tr>
								</tbody>
							</table>
						</td></tr>

						<tr><td colspan="5">
							<table class="good">
								<thead >
									<tr><th colspan="6">
										<span><strong>订单号码：</strong>2013032905510051</span>
									</th></tr>
								</thead>
								<tbody>
									<tr>
										<td class="dingdan_pic"><img src="images/1dbc94fa0d60cba3990b89ccb01f82c2.jpg_tiny.jpg" /></td>
										<td class="dingdan_title"><span><a href="">李宁 lining 专柜正品 足球鞋 女式运动鞋【演示数据】</a></span><br />鞋码:37 颜色:黑色 </td>
										<td class="dingdan_danjia">￥<strong>25.00</strong></td>
										<td class="dingdan_shuliang">1</td>
										<td class="dingdan_zongjia">￥<strong>25.00</strong><br />(免运费)</td>
										<td class="digndan_caozuo"><a href="">等待买家付款</a></td>
									</tr>
								</tbody>
							</table>
						</td></tr>

						<tr><td colspan="5">
							<table class="good">
								<thead >
									<tr><th colspan="6">
										<span><strong>订单号码：</strong>2013032905510051</span>
									</th></tr>
								</thead>
								<tbody>
									<tr>
										<td class="dingdan_pic"><img src="images/1dbc94fa0d60cba3990b89ccb01f82c2.jpg_tiny.jpg" /></td>
										<td class="dingdan_title"><span><a href="">李宁 lining 专柜正品 足球鞋 女式运动鞋【演示数据】</a></span><br />鞋码:37 颜色:黑色 </td>
										<td class="dingdan_danjia">￥<strong>25.00</strong></td>
										<td class="dingdan_shuliang">1</td>
										<td class="dingdan_zongjia">￥<strong>25.00</strong><br />(免运费)</td>
										<td class="digndan_caozuo"><a href="">等待买家付款</a></td>
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