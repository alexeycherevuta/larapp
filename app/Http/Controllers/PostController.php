<?php
namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(PostRequest $request)
    {
        $post = new Post([
            'title'   => $request->title,
            'content' => $request->text,
            'user_id' => Auth::id(),
        ]);
        $post->save();
        return redirect()->route('blog.index');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.form', compact('post'));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.edit', compact('post'));
    }
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->fill([
           'title'   => $request->title,
           'content' => $request->text,
        ]);
        $post->save();
        return redirect()->route('blog.index');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('blog.index');
    }
}
