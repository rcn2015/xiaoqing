
   var selcityUrl = "/admin/Mobile/sanji";
    function selcity(areaId, obgId) {
        $.ajax({
            type: "GET",
            url: selcityUrl,
            data: {"code": areaId},
                //dataType: "json",//回调函数接收数据的数据格式  
            success:function(res) {
                  //  alert(res);
                var ress = eval('(' + res + ')');
                var optionObg = "<option value=''>请选择</option>";
                $.each(ress,function(k,v){
                    if (obgId == "province") {
                        $("#city").html("<option value=''>请选择</option>");
                        $("#country").html("<option value=''>请选择</option>");
                        optionObg += "<option value='" + v.code + "'>" + v.name + "</option>";
                        $("#city").html(optionObg);
                    } else {
                        $("#country").html("<option value=''>请选择</option>");
                        optionObg += "<option value='" + v.code + "'>" + v.name + "</option>";
                        $("#country").html(optionObg);
                    }
                });
            }
        },'json');
    }


    $('.btn').click(function(){
        var cang = $('.cang').val();
        if(cang='')
        {
          return  $('.cang').next().html('仓库名称不能为空');
        }
    })
