@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Socials</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('social.update' , $social->id) }}' method='post'>
            @csrf
            <div>
                <label for=>facebook</label>
                <input type='text' name='facebook' value='{{ $social->facebook }}'>
            </div>
            <div>
                <label for=>twitter</label>
                <input type='text' name='twitter' value='{{ $social->twitter }}'>
            </div>
            <div>
                <label for=>dribble</label>
                <input type='text' name='dribble' value='{{ $social->dribble }}'>
            </div>
            <div>
                <label for=>insta</label>
                <input type='text' name='insta' value='{{ $social->insta }}'>
            </div>
            <div>
                <label for=>skype</label>
                <input type='text' name='skype' value='{{ $social->skype }}'>
            </div>
            <div>
                <label for=>linkedink</label>
                <input type='text' name='linkedink' value='{{ $social->linkedink }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
