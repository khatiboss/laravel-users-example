<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon;

class ArticlesController extends Controller {
	public function index() {
		$articles = Article::latest ()->get (); // Ci torna gli articoli in ordine cronologico secondo data di creazione
		/*
		 * if ($request->ajax () || $request->wantsJson ()) {
		 * return new JsonResponse ( $users );
		 * }
		 */
		return view ( 'articles.index', compact ( 'articles' ) );
	}
	public function create() {
		return view ( 'articles.create' );
	}
	public function store(Request $request) {
		$input = $request->all ();
		$article = Article::create ( $input );
		
		if ($request->ajax () || $request->wantsJson ()) {
			return new JsonResponse ( $article );
		}
		
		flash ()->success ( 'salvato con successo!' );
		
		return redirect ( 'articles' );
	}
	public function show(Article $article) {
		return view ( 'articles.show', compact ( 'article' ) );
	}
	public function edit(Article $article) {
		return view ( 'articles.edit', compact ( 'article' ) );
	}
	public function update(Request $request, Article $article) {
		$input = $request->all ();
		$article->update ( [ 
				'title' => $input ['title'],
				'post' => $input ['post'],
				'published_at' => Carbon\Carbon::now () 
		] );
		
		if ($request->ajax () || $request->wantsJson ()) {
			return new JsonResponse ( $article );
		}
		
		flash ()->success ( 'aggiornato con successo!' );
		
		return redirect ( 'articles' );
	}
	public function destroy($id) {
		$article = Article::findOrFail ( $id );
		
		$article->delete ();
		
		Session::flash ( 'flash_message', 'Article successfully deleted!' );
		
		return redirect ()->route ( 'articles.index' );
	}
}
