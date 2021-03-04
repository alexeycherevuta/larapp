@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('blog.update', ['id' => $post->id]) }}">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title', $post->title)}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="text" cols="30" rows="10" class="form-control">{{old('content', $post->content)}}</textarea>
        </div>
        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded pull-right">
            Envoyer
        </button>
    </form>
@endsection()
