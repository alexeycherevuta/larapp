@extends('layouts.app')
@section('content')
    <div class="w-full max-w-lg mx-auto leading-normal">
        <h1 class="text-black font-bold text-4xl mb-6 border-b border-grey-light">Roles</h1>
    </div>
    <div class="w-full max-w-lg mx-auto leading-normal">
        <form action="{{route('roles.store')}}" class="mb-4 text-center" method="POST">
            {{csrf_field()}}
            <input type="text" class="form-group form-inline" name="name">
            <button class="bg-blue text-white p-1 m-1 rounded">Créer</button>
        </form>
        <div class="flex flex-wrap -mx-4">
            @foreach($roles as $role)
                <div class="w-full md:w-1/3 lg:w-1/3 px-4 mb-2">
                    <div class="border border-grey-light bg-white shadow">
                        <article class=" d-flex p-2 text-center">
                            <h2 class="text-black font-bold text-xl mb-2 text-center">{{$role->name}}</h2>
                            <form method="POST" action="{{ route('roles.destroy', ['role' => $role]) }}" class="mb-4 text-center">
                                {{ method_field('DELETE')}}
                                {{ csrf_field() }}
                                <button class="bg-red-dark text-white p-1 m-1 rounded">Supprimer</button>
                            </form>
                            <form method="GET" action="{{ route('roles.edit', ['role' => $role]) }}" class="mb-4 text-center">
                                {{ csrf_field() }}
                                <button class="bg-blue text-white p-1 m-1 rounded">Modifier</button>
                            </form>
                        </article>
                    </div>
                </div>
            @endforeach()
        </div>
    </div>
@endsection
