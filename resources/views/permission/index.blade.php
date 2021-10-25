@extends('layouts.app')
@section('content')
    <div class="w-full max-w-lg mx-auto leading-normal">
            <h1 class="text-black font-bold text-4xl mb-6 border-b border-grey-light">Permissions</h1>
    </div>
    <div class="w-full max-w-lg mx-auto leading-normal">
    <form  method="POST" action="{{route('permissions.store')}}" class="mb-4 text-center">
        {{csrf_field()}}
        <input type="text" class="form-group form-inline" name="name">
        <button class="bg-blue text-white p-1 m-1 rounded">Créer</button>
    </form>
    <div class="flex flex-wrap -mx-4">
            @foreach($permissions as $permission)
                <div class="w-full md:w-1/3 lg:w-1/3 px-4 mb-2">
                    <div class="border border-grey-light bg-white shadow">
                        <article class="p-3 text-center">
                            <h2 class="text-black font-bold text-xl mb-2 text-center">{{$permission->name}}</h2>
                            <form method="POST" action="{{ route('permissions.destroy', ['permission' => $permission]) }}" class="mb-4 text-center">
                                {{ method_field('DELETE')}}
                                {{ csrf_field()}}
                                <button class="bg-red text-white p-1 m-1 rounded">Supprimer</button>
                            </form>
                        </article>
                    </div>
                </div>
            @endforeach()
        </div>
    </div>
@endsection
