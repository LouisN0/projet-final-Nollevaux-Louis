@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Demandes</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>from</th>
                    <th scope='col'>to</th>
                    <th scope='col'>contenu</th>
                    <th scope='col'>status</th>
                    <th scope='col'>date</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $demande->id }}</th>
                    <td>{{ $demande->from }}</td>
                    <td>{{ $demande->to }}</td>
                    <td>{{ $demande->contenu }}</td>
                    <td>{{ $demande->status }}</td>
                    <td>{{ $demande->date }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('demande.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
