<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class ManagerController extends Controller{
	public function index()
	{
		return view('Admin.Manager.index');
	}
}

?>