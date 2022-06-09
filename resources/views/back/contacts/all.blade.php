@extends('back.layouts.app')
@section('content')
    <div class='mx-5'>
        <h1 class='my-5'>Contacts</h1>
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
                    <th scope='col'>adress</th>
                    <th scope='col'>email</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope='row'>{{ $contact->id }}</th>
                        <td>{{ $contact->adress }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('update', $contact)
                                <a class='btn btn-outline-dark' href='{{ route('contact.edit', $contact->id) }}' role='button'>Edit</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
