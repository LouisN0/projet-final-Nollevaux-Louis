@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Evenements</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('evenement.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            @if(Auth::user()->role_id == 1)
            <div class="mb-3">
                <label for="">Teacher</label>
                <select class="form-control" name="teacher_id" id="about">
                    @foreach ($teachers as $teacher )
                        <option value="{{ $teacher->id }}">{{ $teacher->nom }}</option>
                    @endforeach
                </select>
            </div>
            @else
            <input class='form-control' type='hidden' name='teacher_id' value={{ Auth::user()->teacher->id }}> 
            @endif 
            <div class="mb-3">
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" id="formFile" type='file' name='image'>
            </div>
            <div>
                <label class='form-label'  for=>lieu</label>
                <input class="form-control"  type='text' name='lieu'>
            </div>
            <div>
                <label class='form-label'  for=>date</label>
                <input class="form-control"  type='text' name='date'>
            </div>
            <div>
                <label class='form-label'  for=>start</label>
                <input class="form-control"  type='text' name='start'>
            </div>
            <div>
                <label class='form-label'  for=>titre</label>
                <input class="form-control"  type='text' name='titre'>
            </div>
            <div>
                <label class='form-label'  for=>description</label>
                <input class="form-control"  type='text' name='description'>
            </div>
            
            <button class='btn btn-primary' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
