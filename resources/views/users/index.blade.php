@extends('layouts.app')
@section('content')
    @foreach($users as $user)
        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden p-4 m-4">
            <div class="sm:flex sm:items-center px-6 py-4">
                <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="{{$user->image}}" alt="">
                <div class="text-center sm:text-left sm:flex-grow">
                    <a class="pull-right text-grey-dark" href="{{ route('users.spy', ['id' => $user->id]) }}"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
                    <div class="mb-4">
                        <p class="text-xl leading-tight">{{$user->name}}</p>
                        @foreach($user->roles as $role)
                        <p class="text-sm leading-tight text-grey-dark">{{$role->name}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
