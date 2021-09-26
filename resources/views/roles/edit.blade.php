@extends('layouts.app')
@section('content')
    <div class="w-full max-w-lg mx-auto leading-normal">
        <h1 class="text-black font-bold text-4xl mb-6 border-b border-grey-light">Attribuer des permissions</h1>
    </div>
    <div class="w-full max-w-lg mx-auto leading-normal">
        <div class="flex flex-wrap -mx-4">
            {{$role->permissions()->get()}}
        </div>
    </div>
@endsection
