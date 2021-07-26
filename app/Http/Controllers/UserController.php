<?php

namespace App\Http\Controllers;

use App\Models\UserView;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data_user = UserView::all();
        return view('user/index', compact('data_user'));
    }
}
