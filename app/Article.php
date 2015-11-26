<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{
     //La tabella usata da questo modello
	 protected $table = 'articles';
	 
	 
	 protected $fillable = ['title', 'post', 'published_at'];

	
}
