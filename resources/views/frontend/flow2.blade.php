@extends('layouts.frontend_layouts')
@section('content')
<input type="hidden" name="_token" value="{{ csrf_token()}}" />

<script type="text/javascript" src="frotend/js/jquery.js" ></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".lian").change(function(){
            $(".lian3").hide();
            var code = $(this).val();
            var obj = $(this);
            $.ajax({
                type: "GET",
                url: "{{url('/flow2/add')}}",

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
                url: "{{url('/flow2/add')}}",
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
<title>购物车</title>
<!-- 面包屑 注意首页没有 -->
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
    <div class="shop_gwc_bd_contents clearfix">

        <!-- 购物流程导航 -->
        <div class="shop_gwc_bd_contents_lc clearfix">
            <ul>
                <li class="step_a">确认购物清单</li>
                <li class="step_b hover_b">确认收货人资料及送货方式</li>
                <li class="step_c">购买完成</li>
            </ul>
        </div>
        <!-- 购物流程导航 End -->
        <div class="clear"></div>
        <!-- 收货地址 title -->
        <div class="shop_bd_shdz_title">
            <h3>收货人地址</h3>
            <p><a href="javasrcipt:void(0);" id="new_add_shdz_btn">新增收货地址</a><a href="javascript:void(0);">管理收货地址</a></p>
        </div>
        <div class="clear"></div>
        <!-- 收货人地址 Title End -->
        <div class="shop_bd_shdz clearfix">
            <div class="shop_bd_shdz_lists clearfix">
                <ul>

                    <li><label>寄送至：<span><input type="radio" checked /></span></label><em>北京</em><em>北京市</em><em>昌平区</em><em>回龙观东大街</em><em>王超平(收)</em><em>1336699232</em></li>

                </ul>
            </div>
            <!-- 新增收货地址 -->
            <div id="new_add_shdz_contents" style="display:none;" class="shop_bd_shdz_new clearfix">
                <div class="title">新增收货地址</div>
                <div class="shdz_new_form">
                    <form action="/insert" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}" />
                        <ul>
                            <li><label for=""><span>*</span>收货人姓名：</label><input type="text" name="consignee" class="name" /></li>
                            <li><label for=""><span>*</span>收货人email：</label><input type="text" name="email" class="name" /></li>
                            <li><label for=""><span>*</span>所在地址：</label>
                                <select class="lian" name="country">
                                    <option value="">请选择</option>
                                    @foreach($data as $v)
                                    <option value="{{$v->code}}">{{$v->name}}</option>
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
        </div>
        <div class="clear"></div>
        <!-- 购物车列表 -->
        <div class="shop_bd_shdz_title">
            <h3>确认购物清单</h3>
        </div>
        <div class="clear"></div>
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

            <tr>
                <td class="gwc_list_pic"><a href=""><img src="images/4_7b5239c3f153ae4b67ff760f54408a5b.jpg_tiny.jpg" /></a></td>
                <td class="gwc_list_title"><a href="">双层花架简约韩式田园欧式地中海风格宜家纯白架现代花盆架电话架 </a></td>
                <td class="gwc_list_danjia"><span>￥<strong id="danjia_001">2550.00</strong></span></td>
                <td class="gwc_list_shuliang"><span><a class="good_num_jian this_good_nums" did="danjia_001" xid="xiaoji_001" ty="-" valId="goods_001" href="javascript:void(0);">-</a><input type="text" value="1" id="goods_001" class="good_nums" /><a href="javascript:void(0);" did="danjia_001" xid="xiaoji_001" ty="+" class="good_num_jia this_good_nums" valId="goods_001">+</a></span></td>
                <td class="gwc_list_xiaoji"><span>￥<strong id="xiaoji_001" class="good_xiaojis">2550.00</strong></span></td>
                <td class="gwc_list_caozuo"><a href="">收藏</a><a href="javascript:void(0);" class="shop_good_delete">删除</a></td>
            </tr>

            <tr>
                <td class="gwc_list_pic"><a href=""><img src="images/4_7b5239c3f153ae4b67ff760f54408a5b.jpg_tiny.jpg" /></a></td>
                <td class="gwc_list_title"><a href="">双层花架简约韩式田园欧式地中海风格宜家纯白架现代花盆架电话架 </a></td>
                <td class="gwc_list_danjia"><span>￥<strong id="danjia_002">2550.00</strong></span></td>
                <td class="gwc_list_shuliang"><span><a class="good_num_jian this_good_nums" did="danjia_002" xid="xiaoji_002" ty="-" valId="goods_002" href="javascript:void(0);">-</a><input type="text" value="1" id="goods_002" class="good_nums" /><a href="javascript:void(0);" did="danjia_002" xid="xiaoji_002" ty="+" class="good_num_jia this_good_nums" valId="goods_002">+</a></span></td>
                <td class="gwc_list_xiaoji"><span>￥<strong id="xiaoji_002" class="good_xiaojis">2550.00</strong></span></td>
                <td class="gwc_list_caozuo"><a href="">收藏</a><a href="javascript:void(0);" class="shop_good_delete">删除</a></td>
            </tr>

            <tr>
                <td class="gwc_list_pic"><a href=""><img src="images/4_7b5239c3f153ae4b67ff760f54408a5b.jpg_tiny.jpg" /></a></td>
                <td class="gwc_list_title"><a href="">双层花架简约韩式田园欧式地中海风格宜家纯白架现代花盆架电话架 </a></td>
                <td class="gwc_list_danjia"><span>￥<strong id="danjia_003">2550.00</strong></span></td>
                <td class="gwc_list_shuliang"><span><a class="good_num_jian this_good_nums" did="danjia_003" xid="xiaoji_003" ty="-" valId="goods_003" href="javascript:void(0);">-</a><input type="text" value="1" id="goods_003" class="good_nums" /><a href="javascript:void(0);" did="danjia_003" xid="xiaoji_003" ty="+" class="good_num_jia this_good_nums" valId="goods_003">+</a></span></td>
                <td class="gwc_list_xiaoji"><span>￥<strong id="xiaoji_003" class="good_xiaojis">2550.00</strong></span></td>
                <td class="gwc_list_caozuo"><a href="">收藏</a><a href="javascript:void(0);" class="shop_good_delete">删除</a></td>
            </tr>

            <tr>
                <td class="gwc_list_pic"><a href=""><img src="images/4_7b5239c3f153ae4b67ff760f54408a5b.jpg_tiny.jpg" /></a></td>
                <td class="gwc_list_title"><a href="">双层花架简约韩式田园欧式地中海风格宜家纯白架现代花盆架电话架 </a></td>
                <td class="gwc_list_danjia"><span>￥<strong id="danjia_004">2550.00</strong></span></td>
                <td class="gwc_list_shuliang"><span><a class="good_num_jian this_good_nums" did="danjia_004" xid="xiaoji_004" ty="-" valId="goods_004" href="javascript:void(0);">-</a><input type="text" value="1" id="goods_004" class="good_nums" /><a href="javascript:void(0);" did="danjia_004" xid="xiaoji_004" ty="+" class="good_num_jia this_good_nums" valId="goods_004">+</a></span></td>
                <td class="gwc_list_xiaoji"><span>￥<strong id="xiaoji_004" class="good_xiaojis">2550.00</strong></span></td>
                <td class="gwc_list_caozuo"><a href="">收藏</a><a href="javascript:void(0);" class="shop_good_delete">删除</a></td>
            </tr>

            <tr>
                <td class="gwc_list_pic"><a href=""><img src="images/4_7b5239c3f153ae4b67ff760f54408a5b.jpg_tiny.jpg" /></a></td>
                <td class="gwc_list_title"><a href="">双层花架简约韩式田园欧式地中海风格宜家纯白架现代花盆架电话架 </a></td>
                <td class="gwc_list_danjia"><span>￥<strong id="danjia_005">2550.00</strong></span></td>
                <td class="gwc_list_shuliang"><span><a class="good_num_jian this_good_nums" did="danjia_005" xid="xiaoji_005" ty="-" valId="goods_005" href="javascript:void(0);">-</a><input type="text" value="1" id="goods_005" class="good_nums" /><a href="javascript:void(0);" did="danjia_005" xid="xiaoji_005" ty="+" class="good_num_jia this_good_nums" valId="goods_005">+</a></span></td>
                <td class="gwc_list_xiaoji"><span>￥<strong id="xiaoji_005" class="good_xiaojis">2550.00</strong></span></td>
                <td class="gwc_list_caozuo"><a href="">收藏</a><a href="javascript:void(0);" class="shop_good_delete">删除</a></td>
            </tr>




            </tbody>
            <tfoot>
            <tr>
                <td colspan="6">
                    <div class="gwc_foot_zongjia">商品总价(不含运费)<span>￥<strong id="good_zongjia">12750.00</strong></span></div>
                    <div class="clear"></div>
                    <div class="gwc_foot_links">
                        <a href="" class="go">返回上一步</a>
                        <a href="" class="op">确认收货地址</a>
                    </div>
                </td>
            </tr>
            </tfoot>
        </table>
        <!-- 购物车列表 End -->

    </div>
</div>
<!-- 购物车 Body End -->
@stop
