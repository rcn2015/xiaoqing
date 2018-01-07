<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class SystemController extends Controller{
	public function index(){
		return view('Admin.System.index');
	}
	public function add(){
		// $users= Input::all();
		//   echo $users
		// $name =request('name');
		// echo $name;
		// $input = Input::all();
		$logo = input::file('logo');
		echo $logo;
		// echo $input;die;
	}
}

?>