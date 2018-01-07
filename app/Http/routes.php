<?php
use Gregwar\Captcha\CaptchaBuilder;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/',['as'=>'frontend','uses'=>'IndexController@index']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


//前台路由群组
Route::group(['middleware' => ['web'],'namespace'=>'frontend'], function () {
    //前台首页
    Route::get('/index',['uses'=>'IndexController@index']);

    //管理收货地址
    Route::get('/address',['uses'=>'AddressController@index']);

    //编辑收货地址
    Route::get('/address_edit',['uses'=>'Address_editController@index']);

    //评价管理
    Route::get('/comment',['uses'=>'CommentController@index']);

    //错误页面
    Route::get('/error',['uses'=>'ErrorController@index']);

    //收藏页面
    Route::get('/favorite',['uses'=>'FavoriteController@index']);

    //购物车
    Route::get('/flow',['uses'=>'FlowController@index']);
    Route::get('/flow2',['uses'=>'Flow2Controller@index']);

    //商品详情展示
    Route::any('/goods/id/{id}',['uses'=>'GoodsController@index']);
    //Route::any('/goods',['uses'=>'GoodsController@index']);
    Route::get('/list',['uses'=>'ListController@index']);

    //前台登陆
    Route::get('/login',['uses'=>'LoginController@index']);
    Route::any('/login/loginnew',['uses'=>'LoginController@loginnew']);
    Route::any('/login/qq_login',['uses'=>'LoginController@qq_login']);

    //个人中心   编辑个人资料
    Route::get('/member',['uses'=>'MemberController@index']);
    Route::get('/member_info',['uses'=>'Member_infoController@index']);

    //省市区三级联动
    Route::any('/flow2/add','Flow2Controller@add');
    Route::any('/address/add','addressController@add');

    //添加收货地址
    Route::any('/insert','Flow2Controller@insert');
    Route::any('/new_insert','AddressController@insert');

    //订单
    Route::get('/order',['uses'=>'OrderController@index']);

    //前台修改密码
    Route::get('/password_eidt',['uses'=>'Password_eidtController@index']);

    //注册
    Route::get('/register',['uses'=>'RegisterController@index']);
    Route::any('/register/add',['uses'=>'RegisterController@add']);

    //laravel自带验证写入session
    Route::any('captcha', function(){
        $builder = new CaptchaBuilder;
        $builder->build();
        Session::put('captcha',$builder->getPhrase()); //存储验证码
        return response($builder->output())->header('Content-type','image/jpeg');
    });


});

//后台路由群组
Route::group(['middleware' => ['web','admin'],'namespace'=>'Admin'], function () {
    Route::group(['prefix'=>'admin'],function(){
        //后台展示/
        Route::get('/index','IndexController@index');//首页展示
        Route::get('/Login','LoginController@index');//登录
        Route::post('/Logins','LoginController@login');//登录

        Route::get('/Zhu','ZhuController@index');//（注册）
        Route::post('/Addzhu','ZhuController@add');//（注册添加）
        Route::get('/Product','ProductController@index');//商品列表
        Route::get('/Addproduct','ProductController@add');//添加商品
        Route::post('/Productadd','ProductController@adds');//添加商品类别

        Route::get('/Article','ArticleController@index');   //品牌列表 
        Route::get('/Addarticle','ArticleController@add');//添加品牌列表
        Route::post('/Articleadds','ArticleController@adds');//添加        
        

        Route::get('/Article_category','Article_categoryController@index');//品牌分类列表
        Route::get('/Add_article','Article_categoryController@add');//添加品牌分类页面
        Route::post('/Catadd','Article_categoryController@adds');//添加
        Route::get('/Del','Article_categoryController@del');//删除
        Route::post('/Update','Article_categoryController@update');//修改
        
        

        Route::get('/Nav','NavController@index');//自定义导航栏
        Route::get('/Navadd','NavController@add');//自定义导航栏 添加
        Route::get('/Show','ShowController@index');//首页幻灯
        Route::get('/Page','PageController@index');//单页面
        Route::get('/Addpage','PageController@add');//添加单页面

        Route::get('/Manager','ManagerController@index');//管理员(网站管理员)
        Route::get('/Module','ModuleController@index');//DouPHP+
        Route::get('/System','SystemController@index');//系统设置
        Route::post('/Systems','SystemController@add');//系统设置添加
        Route::get('/Product_category','Product_categoryController@index');//分类添加

        Route::get('/Backup','BackupController@index');//数据备份
        Route::get('/Mobile','MobileController@index');//仓库
        Route::any('/Mobile/sanji','MobileController@san');//三级联动
        Route::any('/Mobile/add','MobileController@add');//三级联动添加
        Route::get('/Theme','ThemeController@index');//仓库展示
        Route::any('/theme/delete/id/{id}',['uses'=>'ThemeController@delete']);//仓库删除
        
        Route::get('/Manager_log','Manager_logController@index');//操作记录
        Route::any('login/yan',['uses'=>'LoginController@yan']);//验证码
    });
});

//后台登陆群组
Route::group(['middleware'=>['web'],'namespace'=>'Admin'],function(){
    Route::match(['get','post'],'admin/login','LoginController@index');
    Route::match(['get','post'],'admin/Index','IndexController@index');
});

