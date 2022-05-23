@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Socials</h1>
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
        <a class='btn btn-success' href='{{ route('social.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>facebook</th>
                    <th scope='col'>twitter</th>
                    <th scope='col'>dribble</th>
                    <th scope='col'>insta</th>
                    <th scope='col'>skype</th>
                    <th scope='col'>linkedink</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($socials as $social)
                    <tr>
                        <th scope='row'>{{ $social->id }}</th>
                        <td>{{ $social->facebook }}</td>
                        <td>{{ $social->twitter }}</td>
                        <td>{{ $social->dribble }}</td>
                        <td>{{ $social->insta }}</td>
                        <td>{{ $social->skype }}</td>
                        <td>{{ $social->linkedink }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('social.destroy', $social->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('social.edit', $social->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('social.read', $social->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
