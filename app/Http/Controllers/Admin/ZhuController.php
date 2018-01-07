<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ZhuController extends Controller{
	public function index()
	{
		return view('Admin.Zhu.index');
	}

   public function add(Request $request){
    // $name = Input::get('name');
    $name =$request->input('name');
   	$password =md5($request->input('password'));
   	$pwd =md5($request->input('pwd'));
   	$email =$request->input('email');
   	$created_at = date('Y-m-d H-i-s');
   	$updated_at = date('Y-m-d H-i-s');
   	if($name ==''){
   		echo "<script>alert('用户名不能为空');location.href='/Zhu'</script>";
   	}
   	else if($password!=$pwd){
   		echo "<script>alert('密码确认密码不一致');location.href='/Zhu'</script>";
   	}
   	else if($email==''){
   		echo "<script>alert('邮箱不能为空');location.href='/Zhu'</script>";
   	}else{
   	
   		DB::table('admin')->insert([
          'name'=>$name,
          'password'=>$password,
          'created_at'=>$created_at,
          'updated_at'=>$updated_at,
          'email'=>$email
   			]);
   		return redirect('/admin/Login');

   	}


   }


}

?>