<?php

namespace App\Http\Controllers;

use App\Categories;
use App\News;
use App\Sliders;
use App\ImageUploader;
use App\NewsImages;

//use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ImageUploader;


    public function index()
    {
        $categories = \App\Categories::all();

        return view('index', ['categories' => $categories]);
    }

    public function userNewsViewPage($id)
    {
        $images = News::find($id)->newsImg;
        $news = News::find($id);
        return view('newsView', ['news' => $news, 'images' => $images]);
    }

    public function userCategoryViewPage($id)
    {

        //$category = Categories::find($id);
        $category = News::query()->where('category_id', $id);

        return view('categoryView', ['category' => $category] );

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
    public function adminViewNews()
    {
        $news = \App\News::all();
        $category = Categories::getCategories();
        return view('admin.news', ['news' => $news, 'category' => $category]);
    }

    // View page добавления новой новости
    public function adminViewAddNews()
    {
        $categories = Categories::getCategories();
        return view('admin.newsAdd', ['categories' => $categories]);
    }

    //Добавление новой новости
    public function adminActionAddNews(Request $request)
    {
        $path = '/news';  // Папка для загрузки картинок новости
        $fileName = self::uploader($request, $path);
        $data = Input::except(['_method', '_token']);

        $news = News::create($data);
        $newsId = $news->id;

        foreach ($fileName as $oneFile) {
            $dataImages = ['filename' => $oneFile, 'news_id' => $newsId];

            NewsImages::create($dataImages);
        }
        return \redirect(route('newsView'));
    }

    // Редактирование новости
    public function adminViewNewsUpdate($id)
    {
        $category = Categories::getCategories();
        $news = News::find($id);
        $images = News::find($id)->newsImg;

        return view('admin.newsUpdate', ['news' => $news, 'category' => $category, 'images' => $images]);
    }


    //


    // Action удаление  новости
    public function adminActionNewsDelete($id)
    {
        $newsDelete = News::find($id);
        $newsDelete->newsImg()->delete();
        $newsDelete->delete();

        return \redirect(route('newsView'));
    }


}