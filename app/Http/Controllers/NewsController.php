<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $news = News::all();
        return view('dashboard.news_and_event.news.index', ['news' => $news], ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = auth()->user();
        return view('dashboard.news_and_event.news.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valid = $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'slug' => 'required|unique:news',
            'image' => 'mimes:jpg,png,jpeg,mp4'
        ]);

        $slug = Str::slug($valid['slug'], '-');
        $img_dir = $request->file('image')->store('images', 'public');

        News::create(array_merge($valid,['slug' => $slug, 'image' => $img_dir]));

        return redirect()->intended(route('dashboard.news.index'))->with('message', 'News and Events Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news, $id)
    {
        //
        $user = auth()->user();
        $news = News::findOrFail($id);
        return view('dashboard.news_and_event.news.edit', ['news' => $news], ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        {
            $news = News::findOrFail($id);
            $valid = $request->validate([
                'title' => ['required', Rule::unique('news')->ignore($news)],
                'description' => 'required',
                'slug' => ['required', Rule::unique('news')->ignore($news)],
                'image' => 'mimes:jpg,png,jpeg,mp4'
            ]);

            if ($request->hasFile('image')) {
                $news->update(array_merge($valid, ['image' => $request->file('image')->store('user_images', 'public')]));
            }
            else {
                $news->update(array_merge($valid));
            }
            return redirect()->intended(route('dashboard.news.index'))->with('message', 'News Successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, $id)
    {
        //
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
