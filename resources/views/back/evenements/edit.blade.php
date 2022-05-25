@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Evenements</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('evenement.update' , $evenement->id) }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image' value='{{ $evenement->image }}'>
            </div>
            <div>
                <label for=>lieu</label>
                <input type='text' name='lieu' value='{{ $evenement->lieu }}'>
            </div>
            <div>
                <label for=>date</label>
                <input type='text' name='date' value='{{ $evenement->date }}'>
            </div>
            <div>
                <label for=>start</label>
                <input type='text' name='start' value='{{ $evenement->start }}'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre' value='{{ $evenement->titre }}'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description' value='{{ $evenement->description }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
