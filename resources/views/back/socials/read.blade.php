@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Socials</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>facebook</th>
                    <th scope='col'>twitter</th>
                    <th scope='col'>dribble</th>
                    <th scope='col'>insta</th>
                    <th scope='col'>skype</th>
                    <th scope='col'>linkedink</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $social->id }}</th>
                    <td>{{ $social->facebook }}</td>
                    <td>{{ $social->twitter }}</td>
                    <td>{{ $social->dribble }}</td>
                    <td>{{ $social->insta }}</td>
                    <td>{{ $social->skype }}</td>
                    <td>{{ $social->linkedink }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('social.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
