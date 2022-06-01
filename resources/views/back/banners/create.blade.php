@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Banners</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('banner.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" id="formFile" type='file' name='image'>
            </div>
            <div class="mb-3">
                <label class="form-label" for=>titre</label>
                <input class="form-control" type='text' name='titre'>
            </div>
            <div class="mb-3">
                <label class="form-label" for=>motsCle</label>
                <input class="form-control" type='text' name='motsCle'>
            </div>
            <div class="mb-3">
                <label class="form-label" for=>description</label>
                <input class="form-control" type='text' name='description'>
            </div>
            <div class="mb-3">
                <label class="form-label" for=>btn</label>
                <input class="form-control" type='text' name='btn'>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">first</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="first" id="check 2" value="1">
                <label for="check-2">yes</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check 2" name="first" value="0">
                <label for="check-2">no</label>
            </div>
            </div>
            <button class="btn btn-primary" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
