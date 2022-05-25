<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email(Request $request)
    {
        return response()->json('maaf, untuk sementara email belum berfungsi');
    }
}
