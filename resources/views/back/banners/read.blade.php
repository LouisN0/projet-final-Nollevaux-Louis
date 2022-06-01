@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banners</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>image</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>motsCle</th>
                    <th scope='col'>description</th>
                    <th scope='col'>btn</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banner->id }}</th>
                    <td><img class="img-thumbnail" src="{{ asset('/images/'. $banner->image ) }}" alt=""></td>
                    <td>{{ $banner->titre }}</td>
                    <td>{{ $banner->motsCle }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>{{ $banner->btn }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-outline-dark' href='{{ route('banner.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
