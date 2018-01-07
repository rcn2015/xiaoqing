<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class FlowController extends Controller
{
    public function index()
    {
        $data=DB::select("select cart.*,goods.goods_img from cart left join goods on cart.goods_id = goods.goods_id where user_id=31");
        $data = json_decode(json_encode($data), true);
        foreach($data as $key=> $val){
            $sales=DB::table('sales')->where('goods_id','=',$val['goods_id'])->where('endtime','>',date("Y-m-d",time()))->get();
            if(!empty($sales)){
                $data[$key]['sales'] = $sales;
            }else{
                $data[$key]['sales'] = "";
            }
        }
        foreach($data as $key =>$val){
            $obj = new \stdClass();
            foreach($val as $k =>$v) {
                $obj->$k = $v;
            }
            $list[] = $obj;
        }
        return view('frontend.flow',['data'=>$list]);
    }
    public function delete(){
        $id = request('id');
        $data=DB::table('cart')->where('cart_id',$id)->delete();
        return redirect('/flow');
    }
    public function add(){
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
        return redirect('/flow');
    }

    public function update(){
        $id = request('id');
        $num = request('num');
        $res=DB::table('cart')->where('goods_id',$id)->update(['buy_number'=>$num]);
        if($res){
            return 1;
        }else{
            return 0;
        }
    }
}