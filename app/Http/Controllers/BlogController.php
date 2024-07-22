<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
 // ********   

    public function showBlogs()
    {
        // Fetch blogs with their owners
        $blogs = Blog::with('user:id,name')
        ->select('id', 'title', 'content', 'user_id')
        ->paginate(12);

        // Pass data to Inertia
        return Inertia::render('blog', [
            'blogs' => $blogs,
        ]);
    }

// ********

    public function createBlog(Request $request)
    {
        //VALIDATE
        $fields = $request->validate([
            'user_id' => ['required'],
            'title' => ['required', 'max:255'],
            'content' => ['required'],
        ]);
        Blog::create($fields);
        //REDIRECT
        return back()->with('message', 'Successfully Created Blog'); // Redirect with flash message
    }

// ********

    public function updateBlog(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|max:255',
            'content' => 'sometimes|required',
        ]);

        $blog->update($validated);
        return back()->with('message', 'Blog updated successfully'); // Redirect with flash message
    }

// ********

    public function deleteBlog(Blog $blog)
    {
        $blog->delete();
        return back()->with('message', 'Successfully Deleted Blog'); // Redirect with flash message
    }
}
