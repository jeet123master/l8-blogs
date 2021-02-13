<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class AdminHomeController extends Controller
{
    function index(){
    	return view('admin.adminHome');
    }
}
