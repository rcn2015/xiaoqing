<?php
namespace App\Http\Controllers\frontend;
//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }
    public function loginnew(){
        $name = request('user');
        $pwd = request('pwd');
        $ch=curl_init();
        $url = 'http://www.api.com/account/login';
        $data = [
            'name'=> $name,
            'password'=>$pwd
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
            return redirect('/');
        }else{
//            echo "</script> alert(123);</script>";
            return redirect('/login');
        }
    }
}