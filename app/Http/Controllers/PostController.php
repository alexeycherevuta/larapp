<?php
namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(PostRequest $request)
    {
        auth()->user()->publish(
            new Post($request->toArray())
        );
        return redirect()->route('post.index');
    }
    public function show(Post $post)
    {
        return view('post.form', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }
    public function update(Post $post)
    {
        $post->update(request(['title', 'body']));
        return redirect()->route('post.index');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
