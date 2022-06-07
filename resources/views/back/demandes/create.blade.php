@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Demandes</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('demande.store') }}' method='post'>
            @csrf
            <div>
                <label for=>from</label>
                <input type='text' name='from'>
            </div>
            <div>
                <label for=>to</label>
                <input type='text' name='to'>
            </div>
            <div>
                <label for=>contenu</label>
                <input type='text' name='contenu'>
            </div>
            <div>
                <label for=>status</label>
                <input type='text' name='status'>
            </div>
            <div>
                <label for=>date</label>
                <input type='text' name='date'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
