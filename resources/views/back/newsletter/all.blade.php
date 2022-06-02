@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Posts</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>email</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($subscribers as $subscriber)
                    <tr>
                        <th scope='row'>{{ $subscriber->id }}</th>
                        <td>{{ $subscriber->email }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
