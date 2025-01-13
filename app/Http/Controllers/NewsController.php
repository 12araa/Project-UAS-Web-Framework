<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();

        return view('pages.news')->with('news', $news);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('news', 'public');
        News::create($data);

        return redirect()->back();
    }

    public function create()
    {
        return view('pages.news.create');
    }

    public function show($news_id)
    {
        $news = News::findOrFail($news_id);
        return view('pages.news.read', compact('news'));
    }

    public function edit($news_id)
    {
        $news = News::findOrFail($news_id);

        return view('pages.news.update', compact('news'));
    }

    public function update(Request $request, $news_id)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|file|max:1024',
            'content' => 'required|string|min:10|max:1000'
        ]);

    $news = News::findOrFail($news_id);

    if ($request->hasFile('image')) {

        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $validatedData['image'] = $request->file('image')->store('news', 'public'); // Simpan image baru
    }

    $news->update([
        'title' => $request->title,
        'image' => $validatedData['image'] ?? $news->image,
        'content' => $request->content
    ]);

    return redirect()->route('news')->with('updated', 'News updated successfully');

    }

    public function destroy($news_id)
    {
        $news = News::findOrFail($news_id);

        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('news')->with('deleted', 'News deleted successfully');
    }

    public function news_read($news_id)
    {
        $news = News::findOrFail($news_id);
        return view('pages.user.read_news', compact('news'));
    }

}
