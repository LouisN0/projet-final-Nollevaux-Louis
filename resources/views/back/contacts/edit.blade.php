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
            <div>
                <label for=>adress</label>
                <input type='text' name='adress' value='{{ $contact->adress }}'>
            </div>
            <div>
                <label for=>email</label>
                <input type='text' name='email' value='{{ $contact->email }}'>
            </div>
            <div>
                <label for=>phone</label>
                <input type='text' name='phone' value='{{ $contact->phone }}'>
            </div>
            <div>
                <label for=>map</label>
                <input type='text' name='map' value='{{ $contact->map }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
