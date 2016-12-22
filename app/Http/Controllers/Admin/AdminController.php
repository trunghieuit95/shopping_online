<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class AdminController extends Controller{
    public function __construct(){
    }

    public function index(){
        return view('welcome');;
        
    }
}