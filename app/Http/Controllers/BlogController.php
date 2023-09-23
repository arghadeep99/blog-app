<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

use App\Http\Requests\CreateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('user')->latest()->get();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog();

        $categoryArray = ['Food','Travel','Lifestyle','Photography','Health and fitness','Fashion and beauty'];

        return view('blogs.create', compact(['blog', 'categoryArray']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {
        $request->user()->blogs()->create($request->only('title', 'category', 'body'));

        return redirect()->route('blogs.index')->with('success', "Your blog has been submitted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $slug)
    {
       $blog = Blog::getBySlug($slug);
       
       if(!$blog)
       {
           abort(404);
       }

       $getRelatedblogs = Blog::getRelatedBlog($blog->id, $blog->category);

       return view('blogs.details', compact(['blog', 'getRelatedblogs']));

    }

    public function my_blogs()
    {
        $getLoginUser = Auth()->user();
        $getBlogs = Blog::getByUserId($getLoginUser->id);
       
        return view('blogs.myblogs', compact('getBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {   
        $this->authorize('update', $blog);

        $categoryArray = ['Food','Travel','Lifestyle','Photography','Health and fitness','Fashion and beauty'];
        return view('blogs.edit', compact(['blog', 'categoryArray']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBlogRequest $request, Blog $blog)
    {   
        $this->authorize('update', $blog);

        $blog->update($request->only('title', 'category', 'body'));

        return redirect('/blogs')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);

        $blog->delete();

        return redirect('/blogs')->with('success', 'The Blog has been removed!');
    }
}
