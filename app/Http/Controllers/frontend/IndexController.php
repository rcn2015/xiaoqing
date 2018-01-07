<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    /**
     * 前台页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //轮播图查询
        $date = DB::table('goods')->limit(4)->get();
        //分类查询
        $info = DB::table('category')->get();
        //转换为关联数组
        $one = json_decode(json_encode($info),'true');
        $one = $this->getlist($one);
        return view('frontend.index',['date'=>$date,'one'=>$one]);
    }
    public function getlist($data,$id=0)
    {
        $arr = array();
        foreach ($data as $val) {
            if($val['parent_id'] == $id)
            {
                $val['child'] = $this->getlist($data,$val['cat_id']);
                $arr[] = $val;
            }
        }
        return $arr;
    }

}