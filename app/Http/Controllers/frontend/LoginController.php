<?php
namespace App\Http\Controllers\frontend;
//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;
class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function loginnew(){
        $name = request('user');
        $pwd = request('pwd');
        // echo $name;echo $pwd;exit;
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
            CURLOPT_POSTFIELDS=>$data,    //传递一个作为HTTP “POST”操作的所有数据的字符串。
            CURLOPT_RETURNTRANSFER=>true  //设定是否显示头信息
        ]);
        //获取返回值并且将json格式数据转换为数组
        $res=json_decode(curl_exec($ch),true);
        curl_close($ch);
        //print_r($res);die;
        $status = $res['status'];
        if($status == 0){
            $id = $res['data']['id'];
            $name=$res['data']['name'];
            \Session::put('user_id',$id);
            \Session::put('uname',$name);
            return redirect('index');
        }else{

            return redirect('/login');
        }
    }

    //qq第三方登录
    public function qq_login()
    {
        $access_token = 'https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=101427412&client_secret=7e65c2c83b4cdd2ee65b4119c3fb0b6f&code='.$_GET['code'].'&redirect_uri=http://shop_item.com/login/qq_login';
        $access_token_content = file_get_contents($access_token);
        $params = $this->access_token($access_token_content);
        // $resf = 'https://graph.qq.com/oauth2.0/token?grant_type=refresh_token&client_id=101427412&client_secret=7e65c2c83b4cdd2ee65b4119c3fb0b6f&refresh_token='.$params['refresh_token'];
        // $data = file_get_contents($resf);
        //print_r($params);die;
        $user_id = 'https://graph.qq.com/oauth2.0/me?access_token='.$params['access_token'];
        $data = file_get_contents($user_id);
        $data = str_replace('callback(','', $data);
        $data = str_replace(');','', $data);
        $open_id = json_decode($data,true);
        $openid=$open_id['openid']; 
        Session::put('openid',$openid);
        $user_url = 'https://graph.qq.com/user/get_user_info?access_token='.$params['access_token'].'&oauth_consumer_key=101427412&openid='.$openid;
        $user_message = json_decode(file_get_contents($user_url), true);
        
        //查询该用户是否绑定手机号或邮箱
        //print_r(strlen($openid));die;
          //$res = DB::table('users_oauth')->where('open_id','=',$openid)->first();
          
          // if($res)
          // {
          //   $data = User::where('id',$res->user_id)->first()->toArray();
          //   \Session::put('user',$data);
            //之前使用扣扣登陆过
            return redirect('index');
          //  }else{
          //   return redirect()->action('LoginController@user_bind', ['status' => 0, 'nickname' => $user_message['nickname']]);
          // }              
        
    }

    //获取扣扣用户access_token
    public function access_token($access_token_content)
    {
        $queryParts = explode('&', $access_token_content);
        $params = array();
        foreach ($queryParts as $param) {
          $item = explode('=', $param);
          $params[$item[0]] = $item[1];
        }  
        return $params;
    }






}