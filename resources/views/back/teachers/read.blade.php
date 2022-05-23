@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Teachers</h1>
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
                    <th scope='col'>[A[C[C[A[A[A[A[A[A[A[A[A[A[A[A[B[B[B[B[B[B[B[B[B[B[B[D[D[C[C[C[C[D[D[D[D[D[A[C[C[Ds_id</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
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
                    <td>{{ $teacher->[A[C[C[A[A[A[A[A[A[A[A[A[A[A[A[B[B[B[B[B[B[B[B[B[B[B[D[D[C[C[C[C[D[D[D[D[D[A[C[C[Ds_id }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('teacher.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
