<?php

namespace App\Http\Controllers\Admin;

use App\Form\Admin\ConstantForm;
use App\Http\Controllers\Controller;
use App\Models\Constant;

class ArticleController extends Controller
{
    public function index()
    {

        return view('admin.article.index');
    }
    public function edit()
    {
        //
    }
    public function delete()
    {
        //
    }
}
