@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Banners</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('banner.store') }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre'>
            </div>
            <div>
                <label for=>motsCle</label>
                <input type='text' name='motsCle'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description'>
            </div>
            <div>
                <label for=>btn</label>
                <input type='text' name='btn'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
