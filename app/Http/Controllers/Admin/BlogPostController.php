<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();
        return view('admin.blog-posts.index', compact('blogPosts'));
    }

    public function create()
    {
        return view('admin.blog-posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        BlogPost::create($request->all());

        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog Post created successfully');
    }

    public function show(BlogPost $blogPost)
    {
        return view('admin.blog-posts.show', compact('blogPost'));
    }

    public function edit(BlogPost $blogPost)
    {
        return view('admin.blog-posts.edit', compact('blogPost'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $blogPost->update($request->all());

        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog Post updated successfully');
    }

    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog Post deleted successfully');
    }
}

