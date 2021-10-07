@extends('layouts.app')
@section('content')
    <div class="container px-4 mx-auto pb-6 pt-2">
    <header>
        @can('create-articles')
            <form method='post' class="float-right" action="{{route('permissions.add', ['id' => $id])}}">
                {{csrf_field()}}
                <select name="permission">
                    @foreach($permissions as $select)
                        <option value="{{$select}}">{{$select}}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded  no-underline">Ajouter une permission</button>
            </form>
        @endcan
        <h1 class="text-black font-bold text-4xl pb-3 mb-6 border-b border-grey-light">Attribuer des permissions</h1>
    </header>
    <div class=" max-w-lg mx-auto leading-normal">
        @foreach($rolePermissions as $permission)
            <div class="md:w-1/4 lg:w-1/3 px-4 mb-2">
                <div class="border border-grey-light bg-white shadow">
                    <article class="p-3 text-center">
                        <h2 class="text-black font-bold text-xl mb-2 text-center">{{$permission->name}}</h2>
                        <a href="{{route('permissions.revoke', ['id' => $id, 'permission' => $permission->name])}}" class="bg-white bg-red-dark text-white p-1 rounded">Supprimer</a>
                    </article>
                </div>
            </div>
        @endforeach()
    </div>
@endsection
