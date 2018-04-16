<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11/011
 * Time: 17:21
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class  PostController extends Controller
{
    //文章列表页面
    public function index()
    {
        return view('post/article');
    }

    public function show()
    {
        return view('post/show');
    }

    public function create()
    {
        return view('post/create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('post/edit');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}