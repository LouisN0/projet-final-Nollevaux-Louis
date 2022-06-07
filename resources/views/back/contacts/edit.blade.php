@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Contacts</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('contact.update' , $contact->id) }}' method='post'>
            @csrf
            <div class="mb-3">
                <label class="form-label" for=>adress</label>
                <input class="form-control" type='text' name='adress' value='{{ $contact->adress }}'>
            </div>
            <div class="mb-3">
                <label class="form-label" for=>email</label>
                <input class="form-control" type='text' name='email' value='{{ $contact->email }}'>
            </div>
            <div class="mb-3">
                <label class="form-label" for=>phone</label>
                <input class="form-control" type='text' name='phone' value='{{ $contact->phone }}'>
            </div>
            <button  class="btn btn-primary" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
