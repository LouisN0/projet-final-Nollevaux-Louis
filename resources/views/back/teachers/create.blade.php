@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Teachers</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('teacher.store') }}' method='post'>
            @csrf
            <div>
                <label for=>photo</label>
                <input type='text' name='photo'>
            </div>
            <div>
                <label for=>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=>discipline</label>
                <input type='text' name='discipline'>
            </div>
            <div>
                <label for=>description</label>
                <input type='text' name='description'>
            </div>
            <div>
                <label for=>biographie</label>
                <input type='text' name='biographie'>
            </div>
            <div>
                <label for=>telephone</label>
                <input type='text' name='telephone'>
            </div>
            <div>
                <label for=>mail</label>
                <input type='text' name='mail'>
            </div>
            <div>
                <label for=>rs</label>
                <input type='text' name='rs'>
            </div>
            <div>
                <label for=>[A[C[C[A[A[A[A[A[A[A[A[A[A[A[A[B[B[B[B[B[B[B[B[B[B[B[D[D[C[C[C[C[D[D[D[D[D[A[C[C[Ds_id</label>
                <input type='text' name='[A[C[C[A[A[A[A[A[A[A[A[A[A[A[A[B[B[B[B[B[B[B[B[B[B[B[D[D[C[C[C[C[D[D[D[D[D[A[C[C[Ds_id'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
