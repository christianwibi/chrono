<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article_model;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data['articles'] = Article_model::where('title', 'LIKE', "%{$request->search}%")
            ->orWhereHas('article_category', function ($query) use ($request) {
                $query->whereHas('category', function ($query2) use ($request) {
                    $query2->where("name", 'LIKE', "%{$request->search}%"); });
            })
            ->paginate(10);

        return view('articles',$data);
    }
}
