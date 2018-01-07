<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class PageController extends Controller{
	public function index()
	{
		return view('Admin.Page.index');
	}

	public function add()
	{
        $name = request('name');
        $cat_id = request('cat_id');
        $price = request('price');
        $content = request('content');
        $image = request('image');
        $keywords = request('keywords');
        $description = request('description');
        DB::table('')->insert(
            [
                'name' => $name,
                'cat_id' => $cat_id,
                'price' => $price,
                'content' => $content,
                'image' => $image,
                'keywords' => $keywords,
                'description' => $description
            ]);
//        return redirect('/show');
        return redirect('Admin.Product.index');
		return view('Admin.Page.add');
	}
}

?>