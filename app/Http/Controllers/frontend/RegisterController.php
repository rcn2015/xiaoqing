<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    public function index()
    {
    	//$data = Ad::get();
    	return view('frontend.register');
    }
    public function add()
    {
        $user = request('user');
        $pwd = request('pwd');
        $repwd = request('repwd');
        $email = request('email');
        $tel = request('tel');
        $ch=curl_init();
        $url = 'http://www.api.com/account/nsd';
        $data = [
            'user'  =>  $user,
            'pwd'   =>  $pwd,
            'repwd' =>  $repwd,
            'email' =>  $email,
            'tel'   =>  $tel
        ];
        //curl调用接口
        curl_setopt_array(
            $ch,[
            CURLOPT_URL=>$url,
            CURLOPT_POST=>true,
            CURLOPT_POSTFIELDS=>$data,
            CURLOPT_RETURNTRANSFER=>true
        ]);
        //获取返回值并且将json格式数据转换为数组
        $res=json_decode(curl_exec($ch),true);
        curl_close($ch);
        $status = $res['status'];
        if($status == 0){
            return redirect('login');
        }else{
            return redirect('register');
        }
    }
}