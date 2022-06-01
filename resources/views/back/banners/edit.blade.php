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
        <form action='{{ route('banner.update' , $banner->id) }}' method='post' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">image</label>
                <input class="form-control" id="formFile" type='file' name='image' value='{{ $banner->image }}'>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">titre</label>
                <input class="form-control"  type='text' name='titre' value='{{ $banner->titre }}'>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">motsCle</label>
                <input class="form-control"  type='text' name='motsCle' value='{{ $banner->motsCle }}'>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">description</label>
                <input class="form-control"  type='text' name='description' value='{{ $banner->description }}'>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">btn</label>
                <input class="form-control"  type='text' name='btn' value='{{ $banner->btn }}'>
            </div>
            @if ($banner->first == 1)
            <div>
                <label for="" class="form-label">first</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="first" id="check 2" value="1" checked>
                <label for="check-2">yes</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check 2" name="first" value="0">
                <label for="check-2">no</label>
            </div>
            </div>
            @else
            <div>
                <label for="" class="form-label">first</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="first" id="check 2" value="1">
                <label for="check-2">yes</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check 2" name="first" value="0" checked>
                <label for="check-2">no</label>
            </div>
            </div>

            @endif
            <button class="btn btn-primary" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
