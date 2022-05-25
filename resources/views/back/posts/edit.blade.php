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
        <form action='{{ route('post.update' , $post->id) }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image' value='{{ $post->image }}'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre' value='{{ $post->titre }}'>
            </div>
            <div>
                <label for=>texte</label>
                <input type='text' name='texte' value='{{ $post->texte }}'>
            </div>
            <div>
                <label for=>date</label>
                <input type='text' name='date' value='{{ $post->date }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
