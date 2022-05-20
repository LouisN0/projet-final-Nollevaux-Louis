@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Slides</h1>
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
        <a class='btn btn-success' href='{{ route('slide.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>image1</th>
                    <th scope='col'>image2</th>
                    <th scope='col'>image3</th>
                    <th scope='col'>image4</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($slides as $slide)
                    <tr>
                        <th scope='row'>{{ $slide->id }}</th>
                        <td>{{ $slide->image1 }}</td>
                        <td>{{ $slide->image2 }}</td>
                        <td>{{ $slide->image3 }}</td>
                        <td>{{ $slide->image4 }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('slide.destroy', $slide->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('slide.edit', $slide->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('slide.read', $slide->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
