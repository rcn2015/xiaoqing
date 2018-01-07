
/**
 * Goods Page Js
 * wanglele 2013/03/28
 */
 jQuery(function(){
 	jQuery("#good_num_jian").click(function(){
        var id = jQuery(".goods_id").val();
 		var num = jQuery("#good_nums").val();
 		num = parseInt(num);
 		num = num-1;
 		if(num<=1){
 			num = 1;
 		}
 		jQuery("#good_nums").val(num);
        jQuery(".goods_sub_gou").attr('href',"/flow/add?id="+id+"&num="+num);
 	});

 	jQuery("#good_num_jia").click(function(){
        var id = jQuery(".goods_id").val();
 		var num = jQuery("#good_nums").val();
 		num = parseInt(num);
 		num = num+1;
 		jQuery("#good_nums").val(num);
        jQuery(".goods_sub_gou").attr('href',"/flow/add?id="+id+"&num="+num);
 	});
 });