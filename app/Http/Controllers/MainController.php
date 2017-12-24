<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use App\Sliders;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $categories = \App\Categories::all();

        return view('index', ['categories' => $categories]);
    }


    //Администрирование
    public function adminPageView()
    {
        return view('admin.index');
    }

    // View управление категориями
    public function adminViewCategoryPage()
    {

        $categories = \App\Categories::all();

        return view('admin.category', ['categories' => $categories]);
    }

    // View page добавление новой категории
    public function adminAddCategoryView()
    {
        return view('admin.categoryAdd');
    }

    // Добавление новой категории
    public function adminActionAdminAddCategory()
    {
        $data = $_POST;
        dd($data);

        Categories::create($data);

        return \redirect(route('actionAddCategory'))->with('alert', 'Категория добавлена!');
    }



}