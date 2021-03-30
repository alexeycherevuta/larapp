@extends('layouts.app')
@section('content')
    @if(session('errors'))
        @foreach(session('errors')->all() as $error)
            <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4" role="alert">
                <p class="font-bold">Oh Mon Dieu ! Quelque chose n'a pas fonctionné ...</p>
                <p>{{$error}}</p>
            </div>
        @endforeach
    @endIf
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
