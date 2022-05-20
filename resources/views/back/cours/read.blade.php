@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Cours</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
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
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('cour.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
