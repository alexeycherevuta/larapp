@extends('layouts.app')
@section('content')
<div class="container mx-auto leading-normal">
    <header>
        <p class="float-right mt-3">
            <a href="{{ route('post.index') }}" class="bg-transparent hover:bg-grey-lighter text-grey-dark hover:text-grey-darker py-2 px-4 border hover:border-grey rounded-sm  no-underline">Retour</a>
        </p>
        <h1 class="text-black font-bold text-4xl pb-3 mb-6 border-b border-grey-light">Rédaction d'un article</h1>
    </header>
    <form class="w-full" method="POST" action="{{ route('post.store') }}">
        {{ csrf_field() }}
        <div class="mb-6">
            <label class="block text-grey font-bold mb-1" for="blog-title">
                Titre
            </label>
            <div class="w-full block">
                <input class="bg-white appearance-none border-2 border-grey-light hover:border-blue rounded w-full py-2 px-4 text-grey-darker" id="blog-title" type="text" name="title" value="{{ old('title') }}">
            </div>
        </div>
        <div class="mb-6">
            <label class="block text-grey font-bold mb-1" for="blog-content">
                Content
            </label>
            <div class="w-full block">
                <textarea id="blog-content" name="body" cols="30" rows="10" class="bg-white appearance-none border-2 border-grey-light hover:border-blue rounded w-full py-2 px-4 text-grey-darker">{{ old('body') }}</textarea>
            </div>
        </div>
        <button type="submit" class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded pull-right no-underline">
            Enregistrer
        </button>
    </form>
</div>
@endsection
