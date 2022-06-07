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
        <form action='{{ route('cour.update', $cour->id) }}' method='post' enctype='multipart/form-data' >
            @csrf
            <div>
                <label class="form-label" for=>image</label>
                <input class="form-control" id="formFile" type='file' name='image'>
            </div>
            <div>
                <label class="form-label" for=>prix</label>
                <input class='form-control' type='text' name='prix' value='{{ $cour->prix }}'>
            </div>
            <div>
                <label class="form-label" for=>titre</label>
                <input class='form-control' type='text' name='titre' value='{{ $cour->titre }}'>
            </div>
            <div>
                <label class="form-label" for=>description</label>
                <input class='form-control' type='text' name='description' value='{{ $cour->description }}'>
            </div>
            <div>
                <label class="form-label" for=>slide_id</label>
                <input class='form-control' type='text' name='slide_id' value='{{ $cour->slide_id }}'>
            </div>
            <div>
                <label class="form-label" for=>start</label>
                <input class='form-control' type='text' name='start' value='{{ $cour->start }}'>
            </div>
            <div>
                <label class="form-label" for=>temps</label>
                <input class='form-control' type='text' name='temps' value='{{ $cour->temps }}'>
            </div>
            <div>
                <label class="form-label" for=>niveau</label>
                <input class='form-control' type='text' name='niveau' value='{{ $cour->niveau }}'>
            </div>
            <div>
                <label class="form-label" for=>discipline</label>
                <input class='form-control' type='text' name='discipline' value='{{ $cour->discipline }}'>
            </div>
            @foreach ($categories as $categorie)
                <div class='form-check'>
                    <input type='checkbox' id='checkbox{{ $categorie->id }}' class='form-check-input' name='categories[]'
                        value='{{ $categorie->id }}' @if ($cour->categories->contains($categorie)) checked @endif>
                    <label for='checkbox{{ $categorie->id }}'>{{ $categorie->nom }}</label>
                </div>
            @endforeach
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
            <button class='btn btn-primary' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
