<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article_model;
use Illuminate\Support\Facades\Crypt;

class ArticleController extends Controller
{
    public function article($id)
    {
        $id = Crypt::decryptString($id);
        $data['article'] = Article_model::where('id',$id)->first();
        return view('article',$data);
    }
}
