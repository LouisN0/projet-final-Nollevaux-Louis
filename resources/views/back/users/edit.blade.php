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
        <form action='{{ route('user.update' , $user->id) }}' method='post' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class='form-label' for=>nom</label>
                <input class='form-control' type='text' name='nom' value='{{ $user->nom }}'>
            </div>
            <div class="mb-3">
                <label class='form-label' for=>email</label>
                <input class='form-control' type='text' name='email' value='{{ $user->email }}'>
            </div>
            <div class="mb-3">
                <label class='form-label' for=>password</label>
                <input class='form-control' type='text' name='password' value='{{ $user->password }}'>
            </div>
            @if (Auth::user()->role_id == 1)
                
            
            <div class="mb-3">
                <label class='form-label' for=>role</label>
                <select class='form-control' name='role_id'>
                    @foreach ($roles as $role)
                        <option value='{{ $role->id }}' {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            @endif
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
	            <input class="form-control" name='image' type="file" id="formFile">
            </div>
            <button class="btn btn-primary"type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
