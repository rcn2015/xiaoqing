<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class ThemeController extends Controller{

	/**
	 * 仓库展示
	 * @return html
	 */
	public function index(){
		$data = DB::table('store')->get();
		$data = json_decode(json_encode($data),true);
		return view('Admin.Theme.index',['data'=>$data]);
	}

	/**
	 * 仓库删除
	 */
	public function delete(Request $res,$id)
	{
		$res = DB::table('store')->where('c_id',$id)->delete();
		if($res)
		{
			return redirect()->back()->with('删除成功');
		}
	}




}

?>