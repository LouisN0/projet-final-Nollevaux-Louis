@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Slides</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('slide.update' , $slide->id) }}' method='post'>
            @csrf
            <div>
                <label for=>image1</label>
                <input type='text' name='image1' value='{{ $slide->image1 }}'>
            </div>
            <div>
                <label for=>image2</label>
                <input type='text' name='image2' value='{{ $slide->image2 }}'>
            </div>
            <div>
                <label for=>image3</label>
                <input type='text' name='image3' value='{{ $slide->image3 }}'>
            </div>
            <div>
                <label for=>image4</label>
                <input type='text' name='image4' value='{{ $slide->image4 }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
