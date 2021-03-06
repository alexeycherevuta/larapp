@extends('layouts.app')
@section('content')
<h1>Uploader une image</h1>
<form action="/image" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="file">Fichier Image</label>
        <input type="file" name="file" id="file">
    </div>
    <button class="btn btn-primary">Envoyer</button>
</form>
@endsection
