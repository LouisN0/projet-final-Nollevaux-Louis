@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Cours</h1>
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
        <a class='btn btn-success' href='{{ route('cour.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>image</th>
                    <th scope='col'>prof_id</th>
                    <th scope='col'>prix</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>description</th>
                    <th scope='col'>slide_id</th>
                    <th scope='col'>start</th>
                    <th scope='col'>temps</th>
                    <th scope='col'>niveau</th>
                    <th scope='col'>discipline</th>
                    <th scope='col'>date</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($cours as $cour)
                    <tr>
                        <th scope='row'>{{ $cour->id }}</th>
                        <td>{{ $cour->image }}</td>
                        <td>{{ $cour->prof_id }}</td>
                        <td>{{ $cour->prix }}</td>
                        <td>{{ $cour->titre }}</td>
                        <td>{{ $cour->description }}</td>
                        <td>{{ $cour->slide_id }}</td>
                        <td>{{ $cour->start }}</td>
                        <td>{{ $cour->temps }}</td>
                        <td>{{ $cour->niveau }}</td>
                        <td>{{ $cour->discipline }}</td>
                        <td>{{ $cour->date }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('cour.destroy', $cour->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('cour.edit', $cour->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('cour.read', $cour->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
