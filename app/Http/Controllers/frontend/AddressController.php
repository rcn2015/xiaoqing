<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AddressController extends Controller
{
    public function index()
    {
        $data = DB::select("select code,name,p_code from tab_regions where p_code=0");
        $info = DB::select("select * from user_address");
        return view('frontend.address',['data'=>$data,'info'=>$info]);
//    	return view('frontend.flow2');
    }

    /**
     * 省市区查询
     * @return  mixed
     */
    public function add(){
        $p_code = request('code');
        $data=DB::select("select code,name,p_code from tab_regions where p_code='$p_code'");
        return $data;
    }
    /**
     * 添加地址
     */
    public function insert(){
        $consignee = request('consignee');
        $email = request('email');
        $country = request('country');
        $province = request('province');
        $city = request('city');
        $address = request('address');
        $zipcode = request('zipcode');
        $mobile = request('mobile');
        $country=json_decode(json_encode(DB::select("select name from tab_regions where code='$country'")),true);
        $province=json_decode(json_encode(DB::select("select name from tab_regions where code='$province'")),true);
        $city=json_decode(json_encode(DB::select("select name from tab_regions where code='$city'")),true);
        $country = $country[0]['name'];
        $province = $province[0]['name'];
        $city = $city[0]['name'];
        $ch=curl_init();
        $url = 'http://www.api.com/account/insert';
        $data = [
            'consignee' =>  $consignee,
            'email'     =>  $email,
            'country'   =>  $country,
            'province'  =>  $province,
            'city'      =>  $city,
            'address'   =>  $address,
            'zipcode'   =>  $zipcode,
            'mobile'    =>  $mobile
        ];
        //curl调用接口
        curl_setopt_array(
            $ch,[
            CURLOPT_URL=>$url,
            CURLOPT_POST=>true,
            CURLOPT_POSTFIELDS=>$data,
            CURLOPT_RETURNTRANSFER=>true
        ]);
        $res=json_decode(curl_exec($ch),true);
        curl_close($ch);
        if($res['status'] == 0){
            return redirect('/address');
        }
    }
}