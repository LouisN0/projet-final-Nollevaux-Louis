@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Cours</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('cour.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            <div>
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" id="formFile" type='file' name='image'>
            </div>
            @if (Auth::user()->role_id == 1)
            @auth
                <div class="mb-3">
                    <label for="">Teacher</label>
                    <select class="form-control" name="teacher_id" id="about">
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->nom }}</option>
                        @endforeach
                    </select>
                </div>
            @else
                <input class='form-control' type='hidden' name='teacher_id' value="{{ Auth::user()->teacher->id }}">
            @endauth
            @endif
            <div>
                <label class='form-label' for=>prix</label>
                <input class='form-control' type='text' name='prix'>
            </div>
            <div>
                <label class='form-label' for=>titre</label>
                <input class='form-control' type='text' name='titre'>
            </div>
            <div>
                <label class='form-label' for=>description</label>
                <input class='form-control' type='text' name='description'>
            </div>
            <div>
                <label class='form-label' for=>start</label>
                <input class='form-control' type='text' name='start'>
            </div>
            <div>
                <label class='form-label' for=>temps</label>
                <input class='form-control' type='text' name='temps'>
            </div>
            <div>
                <label class='form-label' for=>Category</label>
                @foreach ($categories as $categorie)
                    <div class='form-check'>
                        <input type='checkbox' id='checkbox{{ $categorie->id }}' class='form-check-input' name='categories[]'
                            value='{{ $categorie->id }}'>
                        <label for='checkbox{{ $categorie->id }}'>{{ $categorie->nom }}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <label class='form-label' for=>niveau</label>
                <input class='form-control' type='text' name='niveau'>
            </div>
            <div>
                <label class='form-label' for=>discipline</label>
                <input class='form-control' type='text' name='discipline'>
            </div>
            <label class="form-label" for="">slide</label>
            <div>
                <ul>
                    <li>
                        <label for="formFile" class="form-label">image1</label>
                        <input class="form-control" id="formFile" type='file' name='image1'>
                    </li>
                    <li>
                        <label for="formFile" class="form-label">image2</label>
                        <input class="form-control" id="formFile" type='file' name='image2'>
                    </li>
                    <li>
                        <label for="formFile" class="form-label">image3</label>
                        <input class="form-control" id="formFile" type='file' name='image3'>
                    </li>
                    <li>
                        <label for="formFile" class="form-label">image4</label>
                        <input class="form-control" id="formFile" type='file' name='image4'>
                    </li>
                </ul>
            </div>
            <button class='btn btn-primary' type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
