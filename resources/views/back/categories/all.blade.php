@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Categories</h1>
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
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <th scope='row'>{{ $categorie->id }}</th>
                        <td>{{ $categorie->nom }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $categorie)
                                <form action='{{ route('categorie.destroy', $categorie->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type="submit">Delete</button>
                                </form>
                                @endcan
                                @can ('update', $categorie)
                                <a class='btn btn-outline-dark' href='{{ route('categorie.edit', $categorie->id) }}' role='button'>Edit</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
