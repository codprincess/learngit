<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11/011
 * Time: 17:21
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class  ArticlesController extends Controller
{
    //文章列表页面
    public function index()
    {
        return view('article/article');
    }

    public function show()
    {
        return view('article/show');
    }

    public function create()
    {
        return view('article/create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('article/edit');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}