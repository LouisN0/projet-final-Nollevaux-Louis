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
        <form action='{{ route('banner.update' , $banner->id) }}' method='post'>
            @csrf
            <div>
                <label for=>image</label>
                <input type='text' name='image' value='{{ $banner->image }}'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre' value='{{ $banner->titre }}'>
            </div>
            <div>
                <label for=>motsCle</label>
                <input type='text' name='motsCle' value='{{ $banner->motsCle }}'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description' value='{{ $banner->description }}'>
            </div>
            <div>
                <label for=>btn</label>
                <input type='text' name='btn' value='{{ $banner->btn }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
