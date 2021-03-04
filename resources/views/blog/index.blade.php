@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('blog.create') }}" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded pull-right" style="margin-bottom: 20px">
                Créer une news
            </a>
        </div>
    <div class="col-md-12">
        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$post->title}}</h3>
                </div>
                <div class="panel-body">
                    {{$post->content}}
                    <form method="post" action="{{route('blog.destroy', ['id' => $post->id])}}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-danger pull-right">delete</button>
                    </form>
                    <form method="post" action="{{route('blog.edit', ['id' => $post->id])}}">
                        {{ method_field('GET') }}
                        {{ csrf_field() }}
                        <button class="btn btn-primary pull-right" style="margin-right:5px ">edit</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection()
