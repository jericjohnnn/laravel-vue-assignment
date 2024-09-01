<?

namespace App\Repositories;

use App\BlogRepositoryInterface;
use App\Models\Blog;

class BlogRepository implements BlogRepositoryInterface
{
    // public function getAllPosts()
    // {
    //     return Blog::all();
    // }

    // public function getPostById($postId)
    // {
    //     return Blog::findOrFail($postId);
    // }

    // public function deletePost($postId)
    // {
    //     Blog::destroy($postId);
    // }

    // public function createPost(array $postDetails)
    // {
    //     return Blog::create($postDetails);
    // }

    // public function updatePost($postId, array $newDetails)
    // {
    //     $post = Blog::findOrFail($postId);
    //     $post->update($newDetails);
    //     return $post;
    // }
}