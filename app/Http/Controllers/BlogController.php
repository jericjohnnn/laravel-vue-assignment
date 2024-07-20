<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    
    public function deleteBlog(Blog $blog)
    {
        $blog->delete();
        // return Inertia::share('flash', [
        //     'message' => 'Blog deleted successfully!',
        //     'type' => 'success',
        // ]);
        // return redirect()->route('dashboard')->with('deleted','Successfully Deleted');
        return back()->with('deleted', 'Successfully Deleted'); // Redirect with flash message
    }
}
