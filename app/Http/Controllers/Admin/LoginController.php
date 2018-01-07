<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class LoginController extends Controller
{
    public function index(Request $res)
    {
    	if ($res->isMethod('GET')) {
    		return view('Admin.Login.index');
    	} else {
    		$validator = \Validator::make($res->input(),[
    			'Admin.name' => 'required|min:2|max:20',
    			'Admin.password' => 'required|min:2|max:20',
    		],[
    			'required' => ':attribute为必填项',
    			'min' => ':attribute长度不符合要求',
    			'max' => ':attribute长度不符合要求',
    		],[
    			'Admin.name' => '*用户名',
    			'Admin.password' => '*密码',
    		]);
    		if ($validator->fails()) {
    			return redirect()->back()->withErrors($validator)->withInput();
    		} 	
    	
            return redirect('admin/index');          
    	
    	}
    	
    }

}
