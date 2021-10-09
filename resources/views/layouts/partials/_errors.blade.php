@if(session('errors'))
    @foreach(session('errors')->all() as $error)
        <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4" role="alert">
            <p class="font-bold">Oh Mon Dieu ! Quelque chose n'a pas fonctionné ...</p>
            <p>{{$error}}</p>
        </div>
    @endforeach
@endif
