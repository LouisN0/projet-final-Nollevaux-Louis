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
        <form action='{{ route('evenement.store') }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image'>
            </div>
            <div>
                <label for=>lieu</label>
                <input type='text' name='lieu'>
            </div>
            <div>
                <label for=>date</label>
                <input type='text' name='date'>
            </div>
            <div>
                <label for=>start</label>
                <input type='text' name='start'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
