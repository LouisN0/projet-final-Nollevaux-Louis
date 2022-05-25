@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Teachers</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('teacher.update' , $teacher->id) }}' method='post'>
            @csrf
            <div>
                <label for=>photo</label>
                <input type='text' name='photo' value='{{ $teacher->photo }}'>
            </div>
            <div>
                <label for=>nom</label>
                <input type='text' name='nom' value='{{ $teacher->nom }}'>
            </div>
            <div>
                <label for=>discipline</label>
                <input type='text' name='discipline' value='{{ $teacher->discipline }}'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description' value='{{ $teacher->description }}'>
            </div>
            <div>
                <label for=>biographie</label>
                <input type='text' name='biographie' value='{{ $teacher->biographie }}'>
            </div>
            <div>
                <label for=>telephone</label>
                <input type='text' name='telephone' value='{{ $teacher->telephone }}'>
            </div>
            <div>
                <label for=>mail</label>
                <input type='text' name='mail' value='{{ $teacher->mail }}'>
            </div>
            <div>
                <label for=>rs</label>
                <input type='text' name='rs' value='{{ $teacher->rs }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
