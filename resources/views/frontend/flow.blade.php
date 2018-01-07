@extends('layouts.frontend_layouts')
@section('content')	
<title>购物车</title>
<div class="shop_hd_breadcrumb">
		<strong>当前位置：</strong>
		<span>
			<a href="">首页</a>&nbsp;›&nbsp;
			<a href="">我的商城</a>&nbsp;›&nbsp;
			<a href="">我的购物车</a>
		</span>
	</div>
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->
	
	<!-- 购物车 Body -->
	<div class="shop_gwc_bd clearfix">
		<!-- 在具体实现的时候，根据情况选择其中一种情况 -->
        <?php if(empty($data)) { ?>
		<!-- 购物车为空 -->
			<div class="empty_cart mb10">
				<div class="message">
					<p>购物车内暂时没有商品，您可以<a href="index.html">去首页</a>挑选喜欢的商品</p>
				</div>
			</div>
		<!-- 购物车为空 end-->
		<?php } else { ?>
		<!-- 购物车有商品 -->
		<div class="shop_gwc_bd_contents clearfix">
			<!-- 购物流程导航 -->
			<div class="shop_gwc_bd_contents_lc clearfix">
				<ul>
					<li class="step_a hover_a">确认购物清单</li>
					<li class="step_b">确认收货人资料及送货方式</li>
					<li class="step_c">购买完成</li>
				</ul>
			</div>
			<!-- 购物流程导航 End -->

			<!-- 购物车列表 -->
			<table>
				<thead>
					<tr>
						<th colspan="2"><span>商品</span></th>
						<th><span>单价(元)</span></th>
						<th><span>数量</span></th>
						<th><span>小计</span></th>
						<th><span>操作</span></th>
					</tr>
				</thead>
				<tbody>
                <?php $str = 0; ?>
                @foreach($data as $v)
					<tr>
						<td class="gwc_list_pic">
                            <a href=""><img src="frotend/images/{{$v->goods_img}}" whith="100px" height="100px"/></a>
                        </td>
						<td class="gwc_list_title">
                            <ul>
                                <li><a href="">{{$v->goods_name}}</a></li>
                                <?php if(!empty($v->sales)){ ?>
                                    @foreach($v->sales as $k)
                                        <?php if($k->price < $v->goods_price){ ?>
                                            <li style="font-size: 10px;color: gray;">{{$k->name}}</li>
                                        <?php } ?>
                                    @endforeach
                                <?php } ?>
                            </ul>
                        </td>
						<td class="gwc_list_danjia">
                            <?php if(!empty($v->sales)){ ?>
                                @foreach($v->sales as $k)
                                <?php switch($k->status){
                                        case '1':
                                            if($k->price < $v->goods_price){
                                                echo "<span>￥<strong id='danjia_001'>".($v->goods_price-$k->ch_price)."</strong></span>";
                                                echo "(<span><strong id='danjia_001' style='color: red'>￥$v->goods_price - ￥$k->ch_price</strong></span>)";
                                            }else{
                                                echo "<span>￥<strong id='danjia_001'>".($v->goods_price)."</strong></span>";
                                            }
                                            break;
                                        case '2':
                                            echo "<span>￥<strong id='danjia_001'>".$v->goods_price."</strong></span>";
                                            break;
                                        case '3':
                                            echo "<span>￥<strong id='danjia_001'>$v->goods_price</strong></span>";
                                            break;
                                } ?>
                            @endforeach
                            <?php }else{ ?>
                                <span>￥<strong id="danjia_001">{{$v->goods_price}}</strong></span>
                            <?php } ?>
                        </td>
						<td class="gwc_list_shuliang">
                            <input type="hidden" value="{{$v->goods_id}}"/>
                            <span>
                                <a class="good_num_jian this_good_nums" id="cart_jian" href="javascript:void(0);">-</a>
                                <input type="text" value="{{$v->buy_number}}" id="cart_nums" name="num[]" class="good_nums" />
                                <a href="javascript:void(0);" id="cart_jia" class="good_num_jia this_good_nums" valId="goods_001">+</a>
                            </span>
                        </td>
						<td class="gwc_list_xiaoji">
                            <?php if(!empty($v->sales)){ ?>
                            @foreach($v->sales as $k)
                                    <?php switch($k->status){
                                        case '1':
                                            if($k->price < $v->goods_price){
                                                echo "<span>￥<strong id='cart_price' class='good_xiaojis'>".($v->goods_price * $v->buy_number-$k->ch_price*$v->buy_number)."</strong></span>";
                                            }else{
                                                echo "<span>￥<strong id='cart_price' class='good_xiaojis'>".($v->goods_price * $v->buy_number)."</strong></span>";
                                            }
                                            break;
                                        case '2':
                                                echo "<span>￥<strong id='cart_price' class='good_xiaojis'>".($v->goods_price * $v->buy_number)."</strong></span>";
                                            break;
                                        case '3':
                                            echo "<span>￥<strong id='cart_price' class='good_xiaojis'>".($v->goods_price * $v->buy_number)."</strong></span>";
                                            break;
                                    } ?>
                            @endforeach
                            <?php }else{ ?>
                                <span>￥<strong id="cart_price" class="good_xiaojis">{{$v->goods_price * $v->buy_number}}</strong></span>
                            <?php } ?>

                        </td>
						<td class="gwc_list_caozuo">
                            <a href="">收藏</a><a href="/flow/delete?id={{$v->cart_id}}" class="shop_good_delete">删除</a>
                        </td>
					</tr>
                    <?php $str = $str+$v->goods_price * $v->buy_number; ?>
                @endforeach
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6">
							<div class="gwc_foot_zongjia">商品总价(不含运费)<span>￥<strong id="good_zongjia">{{$str}} </strong></span></div>
							<div class="clear"></div>
							<div class="gwc_foot_links">
								<a href="" class="go">继续购物</a>
								<a href="/flow2?id={{$v->goods_id}}" class="op">确认并填写订单</a>
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
			<!-- 购物车列表 End -->
		</div>
		<!-- 购物车有商品 end -->
        <?php } ?>
	</div>
	<!-- 购物车 Body End -->
@stop