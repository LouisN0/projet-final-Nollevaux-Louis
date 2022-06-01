@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Requests</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('request.store') }}' method='post'>
            @csrf
            <div>
                <label for=>user_id</label>
                <input type='text' name='user_id'>
            </div>
            <div>
                <label for=>teacher_id</label>
                <input type='text' name='teacher_id'>
            </div>
            <div>
                <label for=>cour_id</label>
                <input type='text' name='cour_id'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
