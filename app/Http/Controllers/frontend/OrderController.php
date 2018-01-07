<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class OrderController extends Controller
{
    public function index()
    {
    	//$data = Ad::get();
    	return view('frontend.order');
    }
    public function pay(){
        $id=request('goods_id');
        $data=DB::table('goods')->where('goods_id',$id)->get();
        return view('frontend.pay',['data'=>$data]);

    }
}