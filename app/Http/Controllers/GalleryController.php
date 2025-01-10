<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Get images from news
        $newsImages = News::select('id', 'title', 'image', 'created_at')
            ->whereNotNull('image')
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'image' => $item->image,
                    'created_at' => $item->created_at,
                    'type' => 'news',
                    'route' => route('news_show', $item->id)
                ];
            });

        // Get images from events
        $eventImages = Event::select('id', 'title', 'image', 'created_at')
            ->whereNotNull('image')
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'image' => $item->image,
                    'created_at' => $item->created_at,
                    'type' => 'event',
                    'route' => route('event_show', $item->id)
                ];
            });

        // Merge and shuffle all images
        $allImages = $newsImages->concat($eventImages)->shuffle();

        // Return view sesuai dengan struktur folder
        return view('pages.gallery', ['allImages' => $allImages]);
    }
}
