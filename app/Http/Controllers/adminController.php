<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\Ticket;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){

        $news = News::orderBy('created_at', 'desc')->take(5)->get();
        $event = Event::orderBy('created_at', 'desc')->take(5)->get();
        $ticketCount = Ticket::count();
        return view('pages.admin', compact('news', 'event', 'ticketCount'));
    }

    public function gallery(){
        return view('pages.gallery');
    }
}
