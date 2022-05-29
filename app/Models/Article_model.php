<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article_model extends Model
{
	use SoftDeletes;

    protected $table = 'articles';

    public function article_category()
	{
		return $this->hasMany(Article_categories_model::class, 'article_id');
	}

    public function user()
	{
		return $this->hasOne(User::class, 'id', 'created_by');
	}
}
