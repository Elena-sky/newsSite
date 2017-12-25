<?php

namespace App\Http\Controllers;

use App\Categories;
use App\News;
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
        Categories::create($data);
        return \redirect(route('addCategoryView'))->with('alert', 'Категория добавлена!');
    }

    // View редактирование категории
    public function adminViewUpdateCategory($id)
    {
        $category = Categories::find($id);
        return view('admin.categoryUpdate', ['category' => $category]);
    }

    // Action сохранить редактироование категории
    public function adminActionSaveUpdateCategory()
    {
        $data = $_POST;
        $categoryData = Categories::find($data['id']);
        $categoryData->update($data);
        return \redirect(route('viewCategoryAdmin'));
    }

    //Action удаление категории
    public function adminActionCategoryDelete($id)
    {
        $categoryDelete = Categories::find($id);
        $categoryDelete->delete();
        return \redirect(route('viewCategoryAdmin'));
    }

    //View новости
    public function adminaViewNews()
    {
        $news = \App\News::all();
        return view('admin.news', ['news'=>$news]);
    }


}