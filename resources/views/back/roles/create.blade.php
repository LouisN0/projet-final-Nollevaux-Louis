@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Roles</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('role.store') }}' method='post'>
            @csrf
            <div class="mb-3">
                <label class='control-label' for=>role</label>
                <input class='form-control' type='text' name='role'>
            </div>
            <button class='btn btn-primary'type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
