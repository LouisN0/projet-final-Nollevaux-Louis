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
        <form action='{{ route('role.update' , $role->id) }}' method='post'>
            @csrf
            <div>
                <label for=>role</label>
                <input type='text' name='role' value='{{ $role->role }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
