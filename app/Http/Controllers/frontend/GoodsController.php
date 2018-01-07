<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class GoodsController extends Controller
{
    public function index(Request $res,$id)
    {	
    	$data = DB::table('goods')->where('goods_id',$id)->first();
    	//print_r($ids);die;
    	return view('frontend.goods',['data'=>$data]);
    }
}
