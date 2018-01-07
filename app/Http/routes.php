<?php

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
    Route::get('/index',['uses'=>'IndexController@index']);
    Route::get('/address',['uses'=>'AddressController@index']);
    Route::get('/address_edit',['uses'=>'Address_editController@index']);
    Route::get('/comment',['uses'=>'CommentController@index']);
    Route::get('/error',['uses'=>'ErrorController@index']);
    Route::get('/favorite',['uses'=>'FavoriteController@index']);
    Route::get('/flow',['uses'=>'FlowController@index']);
    Route::get('/flow2',['uses'=>'Flow2Controller@index']);
    Route::get('/address',['uses'=>'Flow2Controller@add']);
    Route::get('/goods',['uses'=>'GoodsController@index']);
    Route::get('/list',['uses'=>'ListController@index']);
    Route::get('/login',['uses'=>'LoginController@index']);
    Route::any('/login/loginnew',['uses'=>'LoginController@loginnew']);
    Route::get('/member',['uses'=>'MemberController@index']);
    Route::get('/member_info',['uses'=>'Member_infoController@index']);
    Route::get('/order',['uses'=>'OrderController@index']);
    Route::get('/password_eidt',['uses'=>'Password_eidtController@index']);
    Route::get('/register',['uses'=>'RegisterController@index']);
    Route::any('/register/add',['uses'=>'RegisterController@add']);
    Route::any('/flow2/add',['uses'=>'Flow2Controller@add']);
    Route::any('/flow2/find',['uses'=>'Flow2Controller@find']);
    Route::any('/flow2/insert',['uses'=>'Flow2Controller@insert']);
    Route::any('/flow/update',['uses'=>'FlowController@update']);
    Route::any('/flow/delete',['uses'=>'FlowController@delete']);
    Route::any('/flow/add',['uses'=>'FlowController@add']);
    Route::any('/order/pay',['uses'=>'OrderController@pay']);
//    Route::any('/order/paye',['uses'=>'OrderController@paye']);
});

//后台路由群组
Route::group(['middleware' => ['web'],'namespace'=>'admin'], function () {
    Route::group(['prefix'=>'admin'],function(){
    // Route::get('/','LoginController@index');//登录
    //Route::get('/Product','Admin\ProductController@index');//商品列表
        //后台展示/
        Route::get('/Index','IndexController@index');//首页展示
        Route::get('/Login','LoginController@index');//登录
        Route::post('/Logins','LoginController@login');//登录

        Route::get('/Zhu','ZhuController@index');//（注册）
        Route::post('/Addzhu','ZhuController@add');//（注册添加）
        Route::get('/Product','ProductController@index');//商品列表
        Route::get('/Addproduct','ProductController@add');//添加商品

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
        Route::get('/Mobile','MobileController@index');//手机版
        Route::get('/Theme','ThemeController@index');//设置模板
        Route::get('/Manager_log','Manager_logController@index');//操作记录
        Route::any('login/yan',['uses'=>'LoginController@yan']);//验证码
    });
});

//后台登陆群组
Route::group(['middleware'=>['web'],'namespace'=>'Admin'],function(){
    Route::match(['get','post'],'admin/login','LoginController@index');
});

