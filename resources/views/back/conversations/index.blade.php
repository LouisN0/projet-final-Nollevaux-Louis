@extends('back.layouts.app')
@section('content')
    <div class="container">
        @include('back.conversations.users', ['users' => $users])
    </div>
@endsection
