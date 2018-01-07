<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class Address_editController extends Controller
{
    public function index()
    {
    	//$data = Ad::get();
    	return view('frontend.address_edit');
    }
}