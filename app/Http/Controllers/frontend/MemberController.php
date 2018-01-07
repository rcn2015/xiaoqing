<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class MemberController extends Controller
{
    public function index()
    {
    	//$data = Ad::get();
    	return view('frontend.member');
    }
}