@extends('back.layouts.app')
@section('content')
    <div class='mx-5'>
        <h1 class='my-5'>Services</h1>
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
                    <th scope='col'>icone</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>description</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
                        <td><li class='{{ $service->icone }}'></li></td>
                        <td>{{ $service->titre }}</td>
                        <td>{{ $service->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $service)
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type="submit">Delete</button>
                                </form>
                                @endcan
                                @can ('update', $service)
                                <a class='btn btn-outline-dark' href='{{ route('service.edit', $service->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btn-outline-dark' href='{{ route('service.read', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
