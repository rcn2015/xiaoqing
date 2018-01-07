<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class Product_categoryController extends Controller{
	public function index(){
		return view('Admin.Product_category.add');
	}
}

?>