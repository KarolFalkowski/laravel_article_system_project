<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\Author;
use Illuminate\Support\Facades\Http;


class ArticleController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $myAPI_URL = config('app.url')."/api/article/list";
        $res = HTTP::get($myAPI_URL);
        $articles = json_decode(json_encode($res->json()['data']), FALSE);

        return view('article.list', ['article'=>$articles],);
    }

    public function create()
    {
        $authors = Author::all();

        return view('article.add', ['authors'=>$authors]);
    }

    public function edit($id)
    {
        $article=Entity::find($id);
        $authors = Author::all();
        return view('article.edit', ['article'=>$article],['authors'=>$authors]);
    }

    public function store(Request $request)
    {
        $myAPI_URL = config('app.url')."/api/article/new";
        $response = HTTP::post($myAPI_URL, $request);
        return redirect('/article/list');
    }
    
    public function update(Request $request, $id)
    {
        $myAPI_URL = config('app.url')."/api/article/update/".$id;
        $response = Http::put($myAPI_URL, $request);

        return redirect('/article/list');
    }
}

