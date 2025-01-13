<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(4)->get();
        return view('pages.dashboard', compact('news'));
    }

    public function listNews()
    {
        $news = News::all();
        return view('pages.user.list_news', compact('news'));
    }
}
