<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class GoodsController extends Controller
{
    public function index()
    {
        $goods_id = request('id');
        $data=DB::table('goods')->where('goods_id','=',$goods_id)->get();
        $sales=DB::table('sales')->where('goods_id','=',$goods_id)->where('endtime','>',date("Y-m-d",time()))->get();
//       var_dump($sales);
        return view("frontend.goods",['data'=>$data,'sales'=>$sales]);

    }

}