<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\BlogRepositoryInterface;

class BlogController extends Controller
{

    // ********   

    // protected $blogRepository;

    // public function __construct(BlogRepositoryInterface $blogRepository)
    // {
    //     $this->blogRepository = $blogRepository;
    // }


    public function showAuthenticatedBlogs()
    {
        $user = Auth::user();

        $blogs = Blog::with('user:id,name')
            ->select('id', 'title', 'content', 'user_id')
            ->where('user_id', $user->id)
            ->paginate(12);

        return Inertia::render('dashboard', [
            'blogs' => $blogs ,
        ]);
    }

    // ********   

    public function showAllBlogs()
    {

        // $post = $this->blogRepository->getPostById($id);
        // return response()->json($post);

        $blogs = Blog::with('user:id,name')
            ->select('id', 'title', 'content', 'user_id')
            ->paginate(12);

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

        return back()->with('message', 'Blog Updated Successfully'); // Redirect with flash message
    }

    // ********

    public function deleteBlog(Blog $blog)
    {
        $blog->delete();

        return back()->with('message', 'Successfully Deleted Blog'); // Redirect with flash message
    }
}
