@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Posts</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('post.store') }}' method='post' enctype='multipart/form-data'>
            @csrf
            <div>
                <label class="form-label" for=>image</label>
                <input class="form-control" id="formFile" type='file' name='image'>
            </div>
            <div>
                <label class="form-label" for=>titre</label>
                <input class="form-control" type='text' name='titre'>
            </div>
            <div>
                <label class="form-label" for=>texte</label>
                <input class="form-control" type='text' name='texte'>
            </div>
            <div>
                <label class="form-label" for=>date</label>
                <input class="form-control" type='text' name='date'>
            </div>
            <label class="form-label" for="">categorie</label>
            @foreach ($categories as $categorie)
                <div class='form-check'>
                    <input type='checkbox' id='checkbox{{ $categorie->id }}' class='form-check-input' name='categories[]'
                        value='{{ $categorie->id }}'>
                    <label for='checkbox{{ $categorie->id }}'>{{ $categorie->nom }}</label>
                </div>
            @endforeach
                <label class="form-label" for="">tags</label>
            @foreach ($tags as $tag)
                <div class='form-check'>
                    <input type='checkbox' id='checkbox{{ $tag->id }}' class='form-check-input' name='tags[]'
                        value='{{ $tag->id }}'>
                    <label for='checkbox{{ $tag->id }}'>{{ $tag->nom }}</label>
                </div>
            @endforeach
            <button class="btn btn-primary" type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
