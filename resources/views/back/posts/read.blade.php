@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Posts</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>image</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>texte</th>
                    <th scope='col'>date</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $post->id }}</th>
                    <td>{{ $post->image }}</td>
                    <td>{{ $post->titre }}</td>
                    <td>{{ $post->texte }}</td>
                    <td>{{ $post->date }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('post.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
