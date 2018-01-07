<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="/frotend/css/address.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/base.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_header.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_manager.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_form.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_gouwuche.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_home.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_list.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_goods.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_shdz_835.css" type="text/css" />
	<link rel="stylesheet" href="/frotend/css/shop_goodPic.css" type="text/css" />
	<script type="text/javascript" src="/frotend/js/shop_goodPic_base.js"></script>
	<script type="text/javascript" src="/frotend/js/lib.js"></script>
	<script type="text/javascript" src="/frotend/js/shop_goods_tab.js"></script>
	<script type="text/javascript" src="/frotend/js/163css.js"></script>
    <script type="text/javascript" src="/frotend/js/jquery.js" ></script>
    <script type="text/javascript" src="/frotend/js/topNav.js" ></script>
    <script type="text/javascript" src="/frotend/js/shop_goods.js" ></script>
    <script type="text/javascript" src="/frotend/js/jquery.goodnums.js" ></script>
    <script type="text/javascript" src="/frotend/js/shop_gouwuche.js" ></script>
    <script type="text/javascript" src="/frotend/js/shop_home_tab.js" ></script>
    <script type="text/javascript" src="/frotend/js/focus.js" ></script>
    <script type="text/javascript" src="/frotend/js/shop_list.js" ></script>


</head>
<body>
		<!-- Header  -wll-2013/03/24 -->
	<div class="shop_hd">
		<!-- Header TopNav -->
		<div class="shop_hd_topNav">
			<div class="shop_hd_topNav_all">
				@if (\Session::has('user_id'))						
				<div class="shop_hd_topNav_all_left">
					<p>您好    <font color="#FF0000">{{\Session::get('uname')}}</font> ，欢迎来到<b><a href="/">ShopCZ商城</a></b></p>
				</div>
				@else
				<!-- Header TopNav Left End -->
				<div class="shop_hd_topNav_all_left">
					<p>您好，欢迎来到<b><a href="/">ShopCZ商城</a></b>[<a href="/login">登录</a>][<a href="/register">注册</a>]</p>
				</div>
				@endif
				<!-- Header TopNav Right -->
				<div class="shop_hd_topNav_all_right">
					<ul class="topNav_quick_menu">

						<li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">我的商城<i></i></a>
								<div class="topNav_menu_bd" style="display:none;" >
						            <ul>
						              <li><a title="已买到的商品" target="_top" href="#">已买到的商品</a></li>
						              <li><a title="个人主页" target="_top" href="/member">个人主页</a></li>
						              <li><a title="我的好友" target="_top" href="/index">我的好友</a></li>
						            </ul>
						        </div>
							</div>
						</li>
                                                <li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">卖家中心<i></i></a>
								<div class="topNav_menu_bd" style="display:none;">
						            <ul>
						              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
						              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
						            </ul>
						        </div>
							</div>
						</li>

						<li>
							<div class="topNav_menu">
								<a href="/flow" class="topNavHover">购物车<b>0</b>种商品<i></i></a>
								<div class="topNav_menu_bd" style="display:none;">
									<!--
						            <ul>
						              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
						              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
						            </ul>
						        	-->
						            <p>还没有商品，赶快去挑选！</p>
						        </div>
							</div>
						</li>

						<li>
							<div class="topNav_menu">
								<a href="#" class="topNavHover">我的收藏<i></i></a>
								<div class="topNav_menu_bd" style="display:none;">
						            <ul>
						              <li><a title="收藏的商品" target="_top" href="/favorite">收藏的商品</a></li>
						              <li><a title="收藏的店铺" target="_top" href="/favorite">收藏的店铺</a></li>
						            </ul>
						        </div>
							</div>
						</li>

						<li>
							<div class="topNav_menu">
								<a href="#">站内消息</a>
							</div>
						</li>

					</ul>
				</div>
				<!-- Header TopNav Right End -->
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<!-- Header TopNav End -->

		<!-- TopHeader Center -->
		<div class="shop_hd_header">
			<div class="shop_hd_header_logo"><h1 class="logo"><a href="/"><img src="images/logo.png" alt="ShopCZ" /></a><span>ShopCZ</span></h1></div>
			<div class="shop_hd_header_search">
                            <ul class="shop_hd_header_search_tab">
			        <li id="search" class="current">商品</li>
			        <li id="shop_search">店铺</li>
			    </ul>
                            <div class="clear"></div>
			    <div class="search_form">
			    	<form method="post" action="index.php">
			    		<div class="search_formstyle">
			    			<input type="text" class="search_form_text" name="search_content" value="搜索其实很简单！" />
			    			<input type="submit" class="search_form_sub" name="secrch_submit" value="" title="搜索" />
			    		</div>
			    	</form>
			    </div>
                            <div class="clear"></div>
			    <div class="search_tag">
			    	<a href="">李宁</a>
			    	<a href="">耐克</a>
			    	<a href="">Kappa</a>
			    	<a href="">双肩包</a>
			    	<a href="">手提包</a>
			    </div>

			</div>
		</div>
		<div class="clear"></div>
		<!-- TopHeader Center End -->

		<!-- Header Menu -->
		<div class="shop_hd_menu">
			<!-- 所有商品菜单 -->
                        
			<div id="shop_hd_menu_all_category" class="shop_hd_menu_all_category"><!-- 首页去掉 id="shop_hd_menu_all_category" 加上clsss shop_hd_menu_hover -->
				<div class="shop_hd_menu_all_category_title"><h2 title="所有商品分类"><a href="javascript:void(0);">所有商品分类</a></h2><i></i></div>
				<div id="shop_hd_menu_all_category_hd" class="shop_hd_menu_all_category_hd">
					<ul class="shop_hd_menu_all_category_hd_menu clearfix">
					
                        <?php foreach($one as $key => $val){ ?>
                            <?php if($val['parent_id'] == 0){?>
                                <!-- 单个菜单项 -->
                                <li id="cat_<?= $key+1?>" class="">
                                    <h3>
                                        <a href="" title="<?= $val['cat_id']?>">
                                            <?= $val['cat_name']?>
                                        </a>
                                    </h3>
                                    <div id="cat_<?= $key+1?>_menu" class="cat_menu clearfix" style="">
                                        <?php foreach($val['child'] as $v){?>
                                            <dl class="clearfix">
                                                <dt>
                                                    <a href="">
                                                        <?= $v['cat_name']?>
                                                    </a>
                                                </dt>
                                                <dd>
                                                    <?php foreach ($v['child'] as $value){ ?>
                                                        <a href=""><?= $value['cat_name']?></a>
                                                    <?php } ?>
                                                </dd>
                                            </dl>
                                        <?php }?>
                                    </div>
                                </li>

                            <?php  } }?>
                        <!-- 单个菜单项 End -->
                        <li class="more"><a href="">查看更多分类</a></li>
					</ul>
				</div>
			</div>
			<!-- 所有商品菜单 END -->

			<!-- 普通导航菜单 -->
			<ul class="shop_hd_menu_nav">
				<li class="current_link"><a href=""><span>首页</span></a></li>
				<li class="link"><a href=""><span>团购</span></a></li>
				<li class="link"><a href=""><span>品牌</span></a></li>
				<li class="link"><a href=""><span>优惠卷</span></a></li>
				<li class="link"><a href=""><span>积分中心</span></a></li>
				<li class="link"><a href=""><span>运动专场</span></a></li>
				<li class="link"><a href=""><span>微商城</span></a></li>
			</ul>
			<!-- 普通导航菜单 End -->
		</div>
		<!-- Header Menu End -->

	</div>
	<div class="clear"></div>
	@yield('content')
	<div class="clear"></div>
	<div class="shop_footer">
            <div class="shop_footer_link">
                <p>
                    <a href="">首页</a>|
                    <a href="">招聘英才</a>|
                    <a href="">广告合作</a>|
                    <a href="">关于ShopCZ</a>|
                    <a href="">关于我们</a>
                </p>
            </div>
            <div class="shop_footer_copy">
               <p>Copyright 2004-2013 itcast Inc.,All rights reserved.</p>
            </div>
        </div>
	<!-- Footer End -->
</body>
</html>