@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Roles</h1>
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
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>role</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th scope='row'>{{ $role->id }}</th>
                        <td>{{ $role->role }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $role)
                                <form action='{{ route('role.destroy', $role->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type=submit>Delete</button>
                                </form>
                                @endcan
                                @can ('update', $role)
                                <a class='btn btn-outline-dark' href='{{ route('role.edit', $role->id) }}' role='button'>Edit</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
