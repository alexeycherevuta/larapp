<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function index()
    {
        return view('blog.index')->with('posts', Post::all());
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $post = new Post([
            'title' => $request->title,
            'content' => $request->text,
            'user_id' => Auth::id()
        ]);
        $post->save();
        return redirect(route('blog.index'));
    }
    public function show($id)
    {
        return view('blog.form')->with('post', Post::find($id));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.edit')->with('post', $post);
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->fill([
           'title' => $request->title,
           'content' => $request->text
        ]);
        $post->save();
        return redirect(route('blog.index'));
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect(route('blog.index'));
    }
}
