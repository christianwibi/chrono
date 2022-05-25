<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article_categories_model extends Model
{
    protected $table = 'article_categories';

    public function article()
	{
        return $this->hasOne(Article_model::class, 'id', 'article_id');
	}

    public function category()
	{
        return $this->hasOne(Category_model::class, 'id', 'category_id');
	}
}
