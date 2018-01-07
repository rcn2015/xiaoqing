<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

	public function cates()
    {	echo 123121212;die;
    	//分类查询
        $info = DB::table('category')->get();
        //转换为关联数组
        $one = json_decode(json_encode($info),'true');
        $one = $this->getlist($one);
        //print_r($one);die;
        return view('layouts.frontend_layouts',['one'=>$one]);
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

    


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
