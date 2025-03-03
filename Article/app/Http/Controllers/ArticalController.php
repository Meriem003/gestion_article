<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnArgument;

class ArticleController extends Controller
{
    public function index(){
        $category = new Category();
        $categories=$category->all();
        $article = new Article();
        $articles= $article->all();
        return view('dashboard', ['categories'=>$categories,'articles'=>$articles]);
    }
    public function store(Request $request)  {
        $article = new Article();
        $request = $request->all();
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->category_id = $request['category'];
        $article->user_id = 1;
        $article->save();
        // return view('dashboard');
        return Redirect('/');
    }
}