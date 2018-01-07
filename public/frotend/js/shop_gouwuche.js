/**
 * 购物车 页面自定义JS
 * wll-2013/03/29
 */
$(document).on('click','.this_good_nums',function(){
    var id = $(this).parent().prev().val();
    var status = $(this).attr('id');
    var price = $(this).parent().parent().prev().children().children().html();
    var zong = $("#good_zongjia").html();
    if(status == "cart_jia"){
        var num = $(this).prev().val();
        num = num*1+1;
        $(this).prev().val(num);
        $("#good_zongjia").html(zong*1+price*1);
    } else{
        var num = $(this).next().val();
        if(status == 'cart_jian' && num == '1'){
            return false;
        }
        num = num-1;
        $(this).next().val(num);
        $("#good_zongjia").html(zong-price);
    }
    $(this).parent().parent().next().children().children().html(num*price);
    $.ajax({
        type:"GET",
        url:"/flow/update",
        data:{
            id:id,
            num:num
        }
        ,success:function(data){
            if(data == 0){
                return false;
            }
            if(data == 1){
                return true;
            }
        }
    });
});