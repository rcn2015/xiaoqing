<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class Flow2Controller extends Controller
{
    public function index()
    {
        $id = request('id');
        $data=DB::select("select code,name,p_code from tab_regions where p_code=0");
        $cart=DB::select("select cart.*,goods.goods_img from cart left join goods on cart.goods_id = goods.goods_id where user_id=31");
        return view('frontend.flow2',['data'=>$data,'cart'=>$cart]);
    }
    public function add(){
        $p_code = request('code');
        $data=DB::select("select code,name,p_code from tab_regions where p_code='$p_code'");
        return $data;
    }
    public function find(){
        $id = request('id');
        $num = request('num');
        $data=DB::table('goods')->where('goods_id',$id)->get();
        $arr=json_decode(json_encode($data), true);
        DB::table('cart')->insert(
            [   'user_id'=>31,
                'goods_id'=>$id,
                'goods_name' => $arr[0]['goods_name'],
                'goods_price' => $arr[0]['shop_price'],
                'buy_number' => $num
            ]);
        return redirect('/flow2');
    }

    public function insert()
    {
        $consignee = request('consignee');
        $email = request('email');
        $country = request('country');
        $province = request('province');
        $city = request('city');
        $address = request('address');
        $zipcode = request('zipcode');
        $mobile = request('mobile');

        $ch = curl_init();
        $url = 'http://www.api.com/account/insert';
        $data = [
            'consignee' => $consignee,
            'email' => $email,
            'country' => $country,
            'province' => $province,
            'city' => $city,
            'address' => $address,
            'zipcode' => $zipcode,
            'mobile' => $mobile
        ];
        //curl调用接口
        curl_setopt_array(
            $ch, [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_RETURNTRANSFER => true
        ]);
        $res = json_decode(curl_exec($ch), true);
        curl_close($ch);
        if ($res['status'] == 0) {
            return redirect('/flow2');
        }
    }
}