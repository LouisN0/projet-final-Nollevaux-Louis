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
            <div class='d-flex mt-5 mb-3'>
                <label for="">Icones</label>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault1" value="fa fa-graduation-cap">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <li class="fa fa-graduation-cap"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault2" value="fa fa-globe">
                    <label class="form-check-label" for="flexRadioDefault2">
                        <li class="fa fa-globe"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault3" value="fa fa-clock-o">
                    <label class="form-check-label" for="flexRadioDefault3">
                        <li class="fa fa-clock-o"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault4" value="fa fa-book">
                    <label class="form-check-label" for="flexRadioDefault4">
                        <li class="fa fa-book"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault4" value="fa fa-archive">
                    <label class="form-check-label" for="flexRadioDefault4">
                        <li class="fa fa-archive"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault4" value="fa fa-briefcase">
                    <label class="form-check-label" for="flexRadioDefault4">
                        <li class="fa fa-briefcase"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault4" value="fa fa-camera">
                    <label class="form-check-label" for="flexRadioDefault4">
                        <li class="fa fa-camera"></li>
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" name="icone"
                        id="flexRadioDefault4" value="fa fa-car">
                    <label class="form-check-label" for="flexRadioDefault4">
                        <li class="fa fa-car"></li>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class='control-label' for=>titre</label>
                <input class="form-control" type='text' name='titre' value='{{ $service->titre }}'>
            </div>
            <div class="mb-3">
                <label class='control-label'for=>description</label>
                <input  class="form-control"type='text' name='description' value='{{ $service->description }}'>
            </div>
            <button class="btn btn-primary" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
