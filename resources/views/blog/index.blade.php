@extends('layouts.app')
@section('content')
<div class="w-full max-w-lg mx-auto leading-normal">
    @can('create-articles')
    <p class="float-right">
        <a href="{{ route('blog.create') }}" class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded  no-underline">Rédiger une news</a>
    </p>
    @endcan()
    <h1 class="text-black font-bold text-4xl mb-6 border-b border-grey-light">Blog</h1>
    <div class="flex flex-wrap -mx-4">
    @foreach($posts as $post)
        <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-8">
            <div class="border border-grey-light bg-white shadow">
                <article class="mb-2 p-3">
                    <h2 class="text-black font-bold text-xl mb-2">{{ $post->title }}</h2>
                    <div class="text-grey-darker text-base">
                        {{ str_limit($post->content, 120) }}
                    </div>
                </article>
                <div class="px-6 py-4">
                    @can('edit-articles')
                        <a href="{{ route('blog.edit', $post->id) }}" class="inline-block bg-white hover:bg-grey-lighter text-slate-dark py-2 px-4 border border-slate-lighter rounded shadow no-underline">
                            Edit
                        </a>
                    @endcan
                    @can('edit-articles')
                    <form method="post" action="{{ route('blog.destroy', $post->id) }}" class="inline-block">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="inline-block bg-white hover:bg-red hover:text-white  text-red-dark py-2 px-4 border border-slate-lighter rounded shadow  no-underline">Delete</button>
                        </form>
                    @endcan()
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
