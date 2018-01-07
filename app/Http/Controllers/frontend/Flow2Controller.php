<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class Flow2Controller extends Controller
{
    /**
     * 收货地址管理页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=DB::select("select code,name,p_code from tab_regions where p_code=0");
        return view('frontend.flow2',['data'=>$data]);
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
            return redirect('/flow2');
        }
    }
}