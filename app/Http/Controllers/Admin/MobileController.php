<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class MobileController extends Controller{
	/**
	 * 查询三级联动省份并发送前台
	 */
	public function index(){
		$province = DB::table('tab_regions')->where('level',0)->get();
		$province = json_decode(json_encode($province),true);
		// print_r($province);die;
		return view('Admin.Mobile.index',['province'=>$province]);
	}

	/**
	 * 获取市的父级id 根据id查询出市    在获取市级id查询出县
	 * @return
	 */
	public function san()
	{
		$code = Input::get('code');
		$data = DB::table('tab_regions')->where("p_code",$code)->get();
		$data = json_encode($data);
		echo $data;
	}

	/**
	 * 添加仓库入库
	 */
	public function add()
	{
		$data 	  = Input::all();
		$cname 	  = $data['region_name'];//仓库名称
		$p_id 	  = $data['province'];//省id
		$c_id     = $data['city'];    //市id
		$u_id  	  = $data['country']; //县id
		$province = DB::table('tab_regions')->where('code',$p_id)->first();
		$city	  = DB::table('tab_regions')->where('code',$c_id)->first();
		$country  = DB::table('tab_regions')->where('code',$u_id)->first();
		$res = DB::table('store')->insert(['c_name'=>$cname,'province'=>$province->name.$city->name.$country->name]);
		if($res)
		{
			return redirect()->back()->with('添加成功');
		}else{
			return redirect()->back()->with('添加失败');
		}
		
	}

	/**
	 * 仓库展示
	 */
	public function store_list()
	{		
		return redirect()->action('ThemeController@index');
	}




}

?>