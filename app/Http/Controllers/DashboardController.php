<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Population;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $statistics = Population::latest()->first() ?? new Population();
        $statistics = Population::latest()->first();
        if (!$statistics) {
            $statistics = new Population();
            $statistics->total_penduduk = 0; // Set nilai default
        }
        $news = News::latest()->take(4)->get();
        return view('pages.dashboard', compact('statistics','news'));
    }

    public function listNews()
    {
        $news = News::all();
        return view('pages.user.list_news', compact('news'));
    }

}
