@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Tags</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('tag.store') }}' method='post'>
            @csrf
            <div>
                <label class='form-label' for=>nom</label>
                <input class='form-control' type='text' name='nom'>
            </div>
            <button class="btn btn-primary"type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
