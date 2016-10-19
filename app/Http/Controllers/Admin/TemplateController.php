<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    //前台模板控制

    //进入前台头部控制页面
    public function top(){


        return view('admin.template.top');
    }
}
