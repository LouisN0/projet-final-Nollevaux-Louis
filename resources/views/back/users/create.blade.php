@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Users</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('user.store') }}' method='post'>
            @csrf
            <div>
                <label for=>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=>email</label>
                <input type='text' name='email'>
            </div>
            <div>
                <label for=>password</label>
                <input type='text' name='password'>
            </div>
            <div>
                <label for=>role</label>
                <input type='text' name='role'>
            </div>
            <div>
                <label for=>img</label>
                <input type='text' name='img'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
