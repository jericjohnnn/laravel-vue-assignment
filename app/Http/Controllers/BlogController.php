<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function deleteBlog(Blog $blog){
        
    return redirect('/');
    }
}
