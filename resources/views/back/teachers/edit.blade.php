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
        <form action='{{ route('teacher.update', $teacher->id) }}' method='post'>
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" id="formFile" type='file' name='photo' value='{{ $teacher->photo }}'>
            </div>
            <div>
                <label class='control-label' for=>nom</label>
                <input class="form-control"  type='text' name='nom' value='{{ $teacher->nom }}'>
            </div>
            <div>
                <label class="form-label" for=>discipline</label>
                <input class="form-control" type='text' name='discipline' value='{{ $teacher->discipline }}'>
            </div>
            <div>
                <label class="form-label" for=>description</label>
                <input class="form-control" type='text' name='description' value='{{ $teacher->description }}'>
            </div>
            <div>
                <label class="form-label" for=>biographie</label>
                <input class="form-control" type='text' name='biographie' value='{{ $teacher->biographie }}'>
            </div>
            <div>
                <label class="form-label" for=>telephone</label>
                <input class="form-control" class="form-control" type='text' name='telephone'
                    value='{{ $teacher->telephone }}'>
            </div>
            <div>
                <label class="form-label" for=>mail</label>
                <input class="form-control" type='text' name='mail' value='{{ $teacher->mail }}'>
            </div>
            <label class="form-label" for="">social media</label>
            <div>
                <ul>
                    <li>
                        <label class="form-label" for=>facebook</label>
                        <input class="form-control" type='text' name='facebook' value='{{ $teacher->social->facebook }}'>
                    </li>
                    <li>
                        <label class="form-label" for=>twitter</label>
                        <input class="form-control" type='text' name='twitter' value='{{ $teacher->social->twitter }}'>
                    </li>
                    <li>
                        <label class="form-label" for=>instagram</label>
                        <input class="form-control" type='text' name='insta' value='{{ $teacher->social->insta }}'>
                    </li>
                    <li>
                        <label class="form-label" for=>dribble</label>
                        <input class="form-control" type='text' name='dribble' value='{{ $teacher->social->dribble }}'>
                    </li>
                    <li>
                        <label class="form-label" for=>skype</label>
                        <input class="form-control" type='text' name='skype' value='{{ $teacher->social->skype }}'>
                    </li>
                    <li>
                        <label class="form-label" for=>linkedink</label>
                        <input class="form-control" type='text' name='linkedink' value='{{ $teacher->social->linkedink }}'>
                    </li>
                </ul>

            </div>
            <button class="btn btn-primary mb-3" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
