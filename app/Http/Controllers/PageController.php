<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article_model;
use App\Models\Category_model;
use App\Models\Referral_model;

class PageController extends Controller
{
    public function home()
    {
        $data['articles'] = Article_model::orderBy('created_at','desc')->limit(5)->get();
        return view('home',$data);
    }

    public function about()
    {
        $data['title'] = 'Sarimukti';
        return view('about',$data);
    }

    public function categories()
    {
        $data['categories'] = Category_model::orderBy('name')->get();
        return view('categories',$data);
    }

    public function referrals()
    {
        $data['referrals'] = Referral_model::orderBy('name')->where('status',1)->get();
        return view('referrals',$data);
    }

    public function articles()
    {
        $data['articles'] = Article_model::orderBy('created_at','desc')->paginate(10);
        return view('articles',$data);
    }
}
