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
        <form action='{{ route('slide.store') }}' method='post'>
            @csrf
            <div>
                <label for=>image1</label>
                <input type='text' name='image1'>
            </div>
            <div>
                <label for=>image2</label>
                <input type='text' name='image2'>
            </div>
            <div>
                <label for=>image3</label>
                <input type='text' name='image3'>
            </div>
            <div>
                <label for=>image4</label>
                <input type='text' name='image4'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
