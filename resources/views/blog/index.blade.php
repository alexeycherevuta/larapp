@extends('layouts.app')
@section('content')
<div class="container px-4 mx-auto pb-6 pt-2">
    <header>
        @can('create-articles')
        <p class="float-right">
            <a href="{{ route('blog.create') }}" class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded  no-underline">Rédiger une news</a>
        </p>
        @endcan
        <h1 class="text-black font-bold text-4xl pb-3 mb-6 border-b border-grey-light">Blog</h1>
    </header>
    <div class="flex flex-wrap -mx-3">
    @foreach($posts as $post)
    <div class="lg:w-1/3 md:w-1/2 w-full px-3">
        <article class="bg-white border">
            <h2 class="border-b pb-3 mb-4 font-light">{{ $post->title }}</h2>
            <div>
                {{ $post->content }}
            </div>
        </article>
    </div>
    @endforeach
    </div>
</div>
@endsection
