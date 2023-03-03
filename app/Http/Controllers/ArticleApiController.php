<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\Author;
use App\Models\AuthorEntity;
use App\Http\Requests\EntityRequest;
use Illuminate\Support\Facades\DB;



class ArticleApiController extends Controller
{
    
    public function ListArticle()
    {
        $articles = Entity::all();
        foreach ($articles as $value)
        {
            $value->authors;
        }

        $data = ['data'=>$articles];
        
        return response()->json($data,200);
    }

    public function NewArticle(EntityRequest $request)
    {
        $data = $request->validated();

        $article = new Entity();
        $author_entity = new AuthorEntity();
        $article->title = $data['title'];
        $article->text = $data['text'];
        $article->creation_date = $data['creation_date'];
        $article->save();

        $author_entity->author_id = $data['author_id'];
        $author_entity->entity_id = $article->id;
        $author_entity->save();
        
        return response()->json(['data'=>$article]);
    }

    public function UpdateArticle($id, EntityRequest $request)
    {
        $data = $request->validated();
        $article = Entity::find($id);
        

        if ($article != null)
        {
            $article->title = $data['title'];
            $article->text = $data['text'];
            $article->creation_date = $data['creation_date'];
            $article->save();
            $author_entity = AuthorEntity::where('entity_id',$article->id)
            ->updateOrInsert([
                'author_id' => $data['author_id'],
                'entity_id' => $article->id
            ]);
            

            
            return response()->json(['data'=>$article]);
        }
        else {
            return response()->json(['data'=>[]]);
        }
    }

    public function FindArticleById($id)
    {
        $article = Entity::find($id);
        $article->authors;
        return response()->json(['data'=>$article]);
    }

    public function FindArticleByAuthorId($author_id)
    {
        $article = Entity::select('id','title','text','creation_date')
            ->join('author_entity','author_entity.entity_id','=','news_entity.id')
            ->where('author_entity.author_id','=',$author_id)
            ->get();
        return response()->json(['data'=>$article]);
    }

    public function GetTop3()
    {
        $article = Author::select('id','name', DB::raw('count(author_entity.entity_id) as total'))
            ->join('author_entity','author_entity.author_id','=','news_author.id')
            ->groupBy('author_entity.author_id')
            ->orderBy('total','desc')
            ->limit(3)
            ->get();
        return response()->json(['data'=>$article]);
    }

}

