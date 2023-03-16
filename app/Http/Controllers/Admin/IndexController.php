<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function main()
    {
        return view('admin.main');
    }

    public function drugs()
    {
        return view('admin.drugs');
    }

    public function messages()
    {
        return view('admin.messages');
    }

    public function users()
    {
        return view('admin.users');
    }
}
