@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Teachers</h1>
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
        <a class='btn btn-success' href='{{ route('teacher.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>photo</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>discipline</th>
                    <th scope='col'>description</th>
                    <th scope='col'>biographie</th>
                    <th scope='col'>telephone</th>
                    <th scope='col'>mail</th>
                    <th scope='col'>rs</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <th scope='row'>{{ $teacher->id }}</th>
                        <td>{{ $teacher->photo }}</td>
                        <td>{{ $teacher->nom }}</td>
                        <td>{{ $teacher->discipline }}</td>
                        <td>{{ $teacher->description }}</td>
                        <td>{{ $teacher->biographie }}</td>
                        <td>{{ $teacher->telephone }}</td>
                        <td>{{ $teacher->mail }}</td>
                        <td>{{ $teacher->rs }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('teacher.destroy', $teacher->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('teacher.edit', $teacher->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('teacher.read', $teacher->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
