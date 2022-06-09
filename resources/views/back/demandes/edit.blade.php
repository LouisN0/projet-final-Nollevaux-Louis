@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Demandes</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('demande.update' , $demande->id) }}' method='post'>
            @csrf
            
                <input class="form-control"  type='hidden' name='from' value='{{ $demande->from }}'>
            
           
                <input class="form-control"  type='hidden' name='to' value='{{ $demande->to }}'>
            
            
                
                <input class="form-control"  type='hidden' name='cours' value='{{ $demande->cours }}'>
            
            <div class="mb-3">
                <label class="form-label"  for=>status</label>
                <select class="form-control" name="status" id="about">
                    <option value="0">Pending</option>
                    <option value="1">Accepted</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label"  for=>date</label>
                <input class="form-control"  type='date' name='date' value='{{ $demande->date }}'>
            </div>
            <input type="hidden" value="{{ $demande->email }}" name="email">
            <button class="btn btn-primary"type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
