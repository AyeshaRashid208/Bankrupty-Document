<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','DESC')->get();
        return view('admin/news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'heading' => 'required|max:255',
                'author' => 'required|max:255',
                'author_image' => 'required|max:255',
                'image' => 'required',
                'description' => 'required'
            ]
        );
        $news = new News;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $news->image =  $upload . $filename;
        }
        if ($request->hasfile('author_image')) {
            $file = $request->file('author_image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $news->author_image =  $upload . $filename;
        }
        
        $news->author = $request->author;
        $news->heading = $request->heading;
        $news->description = $request->description;
        $news->save();
        return redirect('admin/news')->with('success','News has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin/news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(
            [
                'heading' => 'required|max:255',
                'author' => 'required|max:255',
                'description' => 'required'
            ]
        );
        $news = News::find($id);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $news->image =  $upload . $filename;
        }
        if ($request->hasfile('author_image')) {
            $file = $request->file('author_image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $news->author_image =  $upload . $filename;
        }
        
        $news->author = $request->author;
        $news->heading = $request->heading;
        $news->description = $request->description;
        $news->update();
        return redirect('admin/news')->with('success','News has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news = News::find($request->id);
        $news->delete();
        return response(['message' => 'News delete successfully']);
    }
}
