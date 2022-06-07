@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Teachers</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('teacher.store') }}' method='post' enctype='multipart/form-data'>
            @csrf

            <div class="mb-3">
                <label for="">User</label>
                <select class="form-control" name="user_id" id="about">
                    @foreach ($users->where('role_id', '==', '4') as $user )
                        <option value="{{ $user->id }}">{{ $user->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" id="formFile" type='file' name='photo'>
            </div>
            <div>
                <label class="form-label"  for=>nom</label>
                <input class="form-control"  type='text' name='nom'>
            </div>
            <div>
                <label class="form-label"  for=>discipline</label>
                <input class="form-control"  type='text' name='discipline'>
            </div>
            <div>
                <label class="form-label"  for=>description</label>
                <input class="form-control"  type='text' name='description'>
            </div>
            <div>
                <label class="form-label"  for=>biographie</label>
                <input class="form-control"  type='text' name='biographie'>
            </div>
            <div>
                <label class="form-label"  for=>telephone</label>
                <input class="form-control"  type='text' name='telephone'>
            </div>
            <div>
                <label class="form-label"  for=>mail</label>
                <input class="form-control"  type='text' name='mail'>
            </div>
            <label class="form-label" for="">social media</label>
            <div>
                <ul>
                    <li>
                        <label class="form-label" for=>facebook</label>
                        <input class="form-control" type='text' name='facebook'>
                    </li>
                    <li>
                        <label class="form-label" for=>twitter</label>
                        <input class="form-control" type='text' name='twitter'>
                    </li>
                    <li>
                        <label class="form-label" for=>instagram</label>
                        <input class="form-control" type='text' name='insta'>
                    </li>
                    <li>
                        <label class="form-label" for=>dribble</label>
                        <input class="form-control" type='text' name='dribble'>
                    </li>
                    <li>
                        <label class="form-label" for=>skype</label>
                        <input class="form-control" type='text' name='skype'>
                    </li>
                    <li>
                        <label class="form-label" for=>linkedink</label>
                        <input class="form-control" type='text' name='linkedink'>
                    </li>
                </ul>
            </div>
            <button class="btn btn-primary" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
