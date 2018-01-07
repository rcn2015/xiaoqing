<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
    	$date= DB::table('goods')->get();
        $new=DB::table('goods')->where('is_new','=','1')->limit(4)->get();
        $hot=DB::table('goods')->where('is_hot','=','1')->limit(4)->get();
        $best=DB::table('goods')->where('is_best','=','1')->limit(4)->get();
        return view('frontend.index',['date'=>$date,'new'=>$new,'hot'=>$hot,'best'=>$best]);
    }
    public function find(){
//        $is_new = request('is_new');
//        $is_hot = request('is_hot');
//        $is_best = request('is_best');
//        if(!$is_new){
//
//        }
        $data=DB::table('goods')->where('is_new','=','1')->limit(4)->get();
        $data=DB::table('goods')->where('is_hot','=','1')->limit(4)->get();
        $data=DB::table('goods')->where('is_best','=','1')->limit(4)->get();

    }

}