<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session,Redirect;
use App\Models\OurteamModel;
class ArticleController extends Controller{
	public function index()
	{
		$data =DB::select("select * from brand inner join cats on brand.cat_names =cats.cat_id");

		 // $data =DB::select('select * from brand');
		return view('Admin.Article.index',['data'=>$data]);
	}

	public function add()
	{
		$data =DB::select('select * from cats');
		return view('Admin.Article.add',['data'=>$data]);
	}


	public function adds(Request $res)
	{
		
       //上传图片
        $file = $res->file('image');
        if ($file->isValid()) {
            // 上传目录。 public目录下 uploads/thumb 文件夹
            $dir = 'D:\www\xiangmu\laravel\public\uploads';  
            // 文件名。格式：时间戳 + 6位随机数 + 后缀名
            $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();          
            $file->move($dir, $filename);
            $path = $filename;//图片路径

         $title =request('title');//品牌名称
        $file = Input::file('image');// 接收图片信息
		$cat_names =request('cat_names');//品牌分类
		$content =request('content');//描述
		$keywords =request('keywords');//关键字
		$description =request('description');//简单说明
        } 


    $data =DB::table('brand')->insert([
            'title'=>$title,
            'image'=>$path,
            'content'=>$content,
            'cat_names'=>$cat_names,
            'keywords'=>$keywords,
            'description'=>$description

			]);
		return redirect('admin/Article');
	}



}

?>