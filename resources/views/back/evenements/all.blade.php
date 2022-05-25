@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Evenements</h1>
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
        <a class='btn btn-success' href='{{ route('evenement.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>image</th>
                    <th scope='col'>lieu</th>
                    <th scope='col'>date</th>
                    <th scope='col'>start</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>description</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <th scope='row'>{{ $evenement->id }}</th>
                        <td>{{ $evenement->image }}</td>
                        <td>{{ $evenement->lieu }}</td>
                        <td>{{ $evenement->date }}</td>
                        <td>{{ $evenement->start }}</td>
                        <td>{{ $evenement->titre }}</td>
                        <td>{{ $evenement->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('evenement.destroy', $evenement->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('evenement.edit', $evenement->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
