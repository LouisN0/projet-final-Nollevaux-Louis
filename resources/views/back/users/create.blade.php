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
        <form action='{{ route('user.store') }}' method='post' enctype="multipart/form-data">
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
            <div class='form-group'>
                <label for='first-role-column'>role_id</label>
                <select class='form-control' name='role_id'>
                    @foreach ($roles as $role)
                        <option value='{{ $role->id }}' {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="formFile" class="form-label">Image</label>
	            <input class="form-control" name='image' type="file" id="formFile">
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
