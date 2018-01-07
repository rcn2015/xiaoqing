<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class CommentController extends Controller
{
    public function index()
    {
    	DB::table('admin')->insert(['name'=>'123']);
    	//$data = Ad::get();
    	return view('frontend.comment');
    }
}