<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class Article_categoryController extends Controller{

	//首页展示
	public function index(){
		$data =DB::select('select * from cats');
		return view('Admin.Article_category.index',['data'=>$data]);
	}

   //品牌分类添加展示页面
	public function add(){
		return view('Admin.Article_category.add');
	}
    //分类添加
	public function adds()
	{
		$cat_name =request('cat_name');
		$unique_id=request('unique_id');
		$keywords=request('keywords');
		$description=request('description');
		$sort=request('sort');
		// echo $cat_name;die;
		$data =DB::table('cats')->insert([
            'cat_name'=>$cat_name,
            'unique_id'=>$unique_id,
            'keywords'=>$keywords,
            'description'=>$description,
            'sort'=>$sort

			]);
		return redirect('/admin/Article_category');
	}


//删除
public function del(Request $request){
	$id =$request->input('id');
	// echo $id;die;
	$del = DB::table('cats')
	->where('cat_id',$id)
	->delete();
	return redirect('/admin/Article_category');
}



}

?>