@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Categories</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('categorie.update' , $categorie->id) }}' method='post'>
            @csrf
            <div>
                <label for=>nom</label>
                <input type='text' name='nom' value='{{ $categorie->nom }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection