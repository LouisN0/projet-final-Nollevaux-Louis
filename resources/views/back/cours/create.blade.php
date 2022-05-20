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
        <form action='{{ route('cour.store') }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image'>
            </div>
            <div>
                <label for=>prof_id</label>
                <input type='text' name='prof_id'>
            </div>
            <div>
                <label for=>prix</label>
                <input type='text' name='prix'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description'>
            </div>
            <div>
                <label for=>slide_id</label>
                <input type='text' name='slide_id'>
            </div>
            <div>
                <label for=>start</label>
                <input type='text' name='start'>
            </div>
            <div>
                <label for=>temps</label>
                <input type='text' name='temps'>
            </div>
            <div>
                <label for=>niveau</label>
                <input type='text' name='niveau'>
            </div>
            <div>
                <label for=>discipline</label>
                <input type='text' name='discipline'>
            </div>
            <div>
                <label for=>date</label>
                <input type='text' name='date'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
