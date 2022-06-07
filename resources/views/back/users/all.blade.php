@extends('back.layouts.app')
@section('content')
    <div class='mx-5'>
        <h1 class='my-5'>Users</h1>
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
        {{-- <a class='btn btn-success' href='{{ route('user.create') }}' role='button'>Create</a> --}}
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>img</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>email</th>
                    <th scope='col'>password</th>
                    <th scope='col'>role</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope='row'>{{ $user->id }}</th>
                        <td><img src="{{ asset("/images/". $user->image) }}" alt="{{ $user->image }}" style="max-width: 4vw; border-radius: 50px"></td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->role->role }}</td>
                        
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $user)
                                <form action='{{ route('user.destroy', $user->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type=submit>Delete</button>
                                </form>
                                @endcan
                                @can ('update', $user)
                                <a class='btn btn-outline-dark' href='{{ route('user.edit', $user->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btn-outline-dark' href='{{ route('user.read', $user->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
