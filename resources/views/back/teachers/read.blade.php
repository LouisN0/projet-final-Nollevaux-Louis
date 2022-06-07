@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Teachers</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>photo</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>discipline</th>
                    <th scope='col'>description</th>
                    <th scope='col'>biographie</th>
                    <th scope='col'>telephone</th>
                    <th scope='col'>mail</th>
                    <th scope='col'>social</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $teacher->id }}</th>
                    <td><img src="{{ asset('/images/' . $teacher->photo) }}" alt="{{ $teacher->photo }}"
                        style="max-width: 4vw; border-radius: 50px"></td>
                    <td>{{ $teacher->nom }}</td>
                    <td>{{ $teacher->discipline }}</td>
                    <td>{{ $teacher->description }}</td>
                    <td>{{ $teacher->biographie }}</td>
                    <td>{{ $teacher->telephone }}</td>
                    <td>{{ $teacher->mail }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-dark w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            all 
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Social media</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>fb: {{ $teacher->social->facebook }}</p>
                                    </div>
                                    <div class="modal-body">
                                        <p>twitter: {{ $teacher->social->twitter }}</p>
                                    </div>
                                    <div class="modal-body">
                                        <p>dribble: {{ $teacher->social->dribble }}</p>
                                    </div>
                                    <div class="modal-body">
                                        <p>insta: {{ $teacher->social->insta }}</p>
                                    </div>
                                    <div class="modal-body">
                                        <p>skype: {{ $teacher->social->skype }}</p>
                                    </div>
                                    <div class="modal-body">
                                        <p>linkedink :{{ $teacher->social->linkedink }}</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-outline-dark' href='{{ route('teacher.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
