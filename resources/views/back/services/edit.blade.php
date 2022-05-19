@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Services</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('service.update' , $service->id) }}' method='post'>
            @csrf
            <div>
                <label for=>icone</label>
                <input type='text' name='icone' value='{{ $service->icone }}'>
            </div>
            <div>
                <label for=>titre</label>
                <input type='text' name='titre' value='{{ $service->titre }}'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description' value='{{ $service->description }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
