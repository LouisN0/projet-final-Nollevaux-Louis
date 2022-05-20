@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Slides</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>image1</th>
                    <th scope='col'>image2</th>
                    <th scope='col'>image3</th>
                    <th scope='col'>image4</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $slide->id }}</th>
                    <td>{{ $slide->image1 }}</td>
                    <td>{{ $slide->image2 }}</td>
                    <td>{{ $slide->image3 }}</td>
                    <td>{{ $slide->image4 }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('slide.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
