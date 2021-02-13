<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class DashboardController extends Controller
{
    function index()
    {
    	return view('author.author');
    }
}
