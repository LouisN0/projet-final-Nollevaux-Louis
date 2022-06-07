@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Posts</h1>
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
                    <th scope='col'>texte</th>
                    <th scope='col'>date</th>
                    <th scope='col'>status</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope='row'>{{ $post->id }}</th>
                        <td>{{ $post->image }}</td>
                        <td>{{ $post->titre }}</td>
                        <td>{!! (Str::words($post->texte, '12')) !!}</td>
                        <td>{{ $post->date }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $post)
                                <form action='{{ route('post.destroy', $post->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type="submit">Delete</button>
                                </form>
                                @endcan
                                @can ('update', $post)
                                <a class='btn btn-outline-dark' href='{{ route('post.edit', $post->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btn-outline-dark' href='{{ route('post.read', $post->id) }}' role='button'>Read</a>
                                @if (Auth::user()->role_id == 1)
                                @if ($post->status == 0)
                                    <form action='{{ route('post.publish', $post->id) }}' method='post'>
                                        @csrf
                                        {{-- @method('put') --}}
                                        <button class='btn btn-success mx-1' type="submit">Publish</button>
                                    </form>
                                @else
                                    <form action='{{ route('post.unpublish', $post->id) }}' method='post'>
                                        @csrf
                                        {{-- @method('put') --}}
                                        <button class='btn btn-warning mx-1' type="submit">Unpublish</button>
                                    </form>
                                @endif
                                
                            @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
