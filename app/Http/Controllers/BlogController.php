<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataBlogs = Blog::get();
        return view('blog/list', compact('DataBlogs'));
    }


    public function add_blog()
    {
        return view('blog/add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = '';
        if ($request->hasfile('filename')) {
            $file = $request->file('filename');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }

        $blog = new Blog;
        $blog->judul = $request->get('judul');
        $blog->artikel = $request->get('article');
        $blog->gambar = $name;
        $blog->save();

        return redirect('admin/blog')->with('success', 'Blog berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::finnd($id);
        $blog->judul = $request->get('judul');
        $blog->artikel = $request->get('article');
        $blog->update();
        return redirect('admin/blog')->with('Success', 'Information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog-> delete();
        return redirect('admin/blog')->with('Success', 'Information has been deleted');
    }

    public function edit_blog($id)
    {
        $blog = Blog::find($id);
        return view('blog/edit', compact('blog', 'id'));
    }
}
