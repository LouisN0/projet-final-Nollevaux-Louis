@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Requests</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>user_id</th>
                    <th scope='col'>teacher_id</th>
                    <th scope='col'>cour_id</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $request->id }}</th>
                    <td>{{ $request->user_id }}</td>
                    <td>{{ $request->teacher_id }}</td>
                    <td>{{ $request->cour_id }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('request.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
