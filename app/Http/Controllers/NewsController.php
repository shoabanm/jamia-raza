<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(5);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('uploads/news', $fileName, 'public');
            $data['image'] = $path;
        }

        News::create($data);
        return redirect()->route('admin.news.index')->with('status', __('news.created'));
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, News $news)
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('uploads/news', $fileName, 'public');
            $data['image'] = $path;
        } else {
            $data['image'] = $news->image;
        }

        $news->update($data);
        return redirect()->route('admin.news.index')->with('status', __('news.updated'));
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();
        return redirect()->route('admin.news.index')->with('status', __('news.deleted'));
    }
}
