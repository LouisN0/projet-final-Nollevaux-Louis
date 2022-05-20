@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Cours</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('cour.update' , $cour->id) }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image' value='{{ $cour->image }}'>
            </div>
            <div>
                <label for=>prof_id</label>
                <input type='text' name='prof_id' value='{{ $cour->prof_id }}'>
            </div>
            <div>
                <label for=>prix</label>
                <input type='text' name='prix' value='{{ $cour->prix }}'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre' value='{{ $cour->titre }}'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description' value='{{ $cour->description }}'>
            </div>
            <div>
                <label for=>slide_id</label>
                <input type='text' name='slide_id' value='{{ $cour->slide_id }}'>
            </div>
            <div>
                <label for=>start</label>
                <input type='text' name='start' value='{{ $cour->start }}'>
            </div>
            <div>
                <label for=>temps</label>
                <input type='text' name='temps' value='{{ $cour->temps }}'>
            </div>
            <div>
                <label for=>niveau</label>
                <input type='text' name='niveau' value='{{ $cour->niveau }}'>
            </div>
            <div>
                <label for=>discipline</label>
                <input type='text' name='discipline' value='{{ $cour->discipline }}'>
            </div>
            <div>
                <label for=>date</label>
                <input type='text' name='date' value='{{ $cour->date }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
