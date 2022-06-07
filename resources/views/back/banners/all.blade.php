@extends('back.layouts.app')
@section('content')
    <div class='mx-5'>
        <h1 class='my-5'>Banners</h1>
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
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>image</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>motsCle</th>
                    <th scope='col'>description</th>
                    <th scope='col'>btn</th>
                    <th scope='col'>first</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
                        <td>{{ $banner->image }}</td>
                        <td>{{ $banner->titre }}</td>
                        <td>{{ $banner->motsCle }}</td>
                        <td>{{ $banner->description }}</td>
                        <td>{{ $banner->btn }}</td>
                        <td>{{ $banner->first }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $banner)
                                <form action='{{ route('banner.destroy', $banner->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type="submit">Delete</button>
                                </form>
                                @endcan
                                @can ('update', $banner)
                                <a class='btn btn-outline-dark' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btn-outline-dark' href='{{ route('banner.read', $banner->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
