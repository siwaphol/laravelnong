<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	public function index()
	{
		// Get articles that publish date more than today
		// $articles = Article::latest('publixhed_at')->where('published_at', '>=' ,Carbon::now())->get();
		// $articles = Article::latest('published_at')->get();
		$articles = Article::latest('published_at')->unpublished()->get();

		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{
		$article = Article::findOrFail($id); //findOrFail let you use Laravel's ModelNotFoundException other than doing null capture yourselves 

		// dd($article->created_at->addDays(8)->diffForHumans());
		dd($article->published_at);

		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(Requests\CreateArticleRequest $request)
	{ 
		// $this->validate($request, ['title' => 'required', 'body' => 'required']);
		Article::create($request->all());

		return redirect('articles');
	}

}
