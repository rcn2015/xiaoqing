<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session,Redirect;
use App\Models\OurteamModel;
class ProductController extends Controller{
	public function index()
	{
	 $data =DB::select("select * from product inner join category on product.good_cat =category.cat_id");
	return view('Admin.Product.index',['data'=>$data]);
	}

	public function add()
	{
			$data =DB::select("select * from category");

		return view('Admin.Product.add',['data'=>$data]);
	}

	public function adds(Request $res){
		//上传图片
        $file = $res->file('image');
        if ($file->isValid()) {
            // 上传目录。 public目录下 uploads/thumb 文件夹
            $dir = 'D:\www\xiangmu\laravel\public\uploads';  
            // 文件名。格式：时间戳 + 6位随机数 + 后缀名
            $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();          
            $file->move($dir, $filename);
            $path = $filename;//图片路径

         $name =request('name');//品牌名称
         // echo $name;die;
        $file = Input::file('image');// 接收图片信息
		$good_cat =request('good_cat');//品牌分类
		$price =request('price');//价格
		$content =request('content');//描述
		$keywords =request('keywords');//关键字
		$description =request('description');//简单说明
        } 


    $data =DB::table('product')->insert([
            'name'=>$name,
            'price'=>$price,
            'image'=>$path,
            'content'=>$content,
            'good_cat'=>$good_cat,
            'keywords'=>$keywords,
            'description'=>$description

			]);
		return redirect('admin/Product');
	}
}

?>