@extends('back.layouts.app')
@section('content')
    <div class='mx-5'>
        <h1 class='my-5'>Cours</h1>
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
                    <th scope='col'>prix</th>
                    <th scope='col'>titre</th>
                    <th scope='col'>description</th>
                    <th scope='col'>slide</th>
                    <th scope='col'>start</th>
                    <th scope='col'>temps</th>
                    <th scope='col'>niveau</th>
                    <th scope='col'>discipline</th>
                    <th scope='col'>date</th>
                    <th scope='col'>status</th>
                    <th scope='col'>views</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($cours as $cour)
                    <tr>
                        <th scope='row'>{{ $cour->id }}</th>
                        <td><img src="{{ asset('/images/'.$cour->image)  }}" class="img-thumbnail" style="width: " alt=""></td>
                        <td>{{ $cour->prix }}</td>
                        <td>{{ $cour->titre }}</td>
                        <td>{!! (Str::words($cour->description, '12')) !!}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $cour->id }}">
                                all 
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $cour->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $cour->titre }} slide</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">1</label>
                                            <div class="d-flex justify-content-center mb-3">
                                                <img style="width:50%"  src="{{ asset('/images/'. $cour->slide->image1) }}" alt="">
                                            </div>
                                            <label for="">2</label>
                                            <div class="d-flex justify-content-center mb-3">
                                                <img style="width:50%"  src="{{ asset('/images/'. $cour->slide->image2) }}" alt="">
                                            </div>
                                            <label for="">3</label>
                                            <div class="d-flex justify-content-center mb-3">
                                                <img style="width:50%"  src="{{ asset('/images/'. $cour->slide->image3) }}" alt="">
                                            </div>
                                            <label for="">4</label>
                                            <div class="d-flex justify-content-center mb-3">
                                                <img style="width:50%"  src="{{ asset('/images/'. $cour->slide->image4) }}" alt="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div></td>
                        <td>{{ $cour->start }}</td>
                        <td>{{ $cour->temps }}</td>
                        <td>{{ $cour->niveau }}</td>
                        <td>{{ $cour->discipline }}</td>
                        <td>{{ $cour->date }}</td>
                        <td>@if ($cour->status == 1)
                                <span class='badge badge-success'>Active</span>
                            @else
                                <span class='badge badge-danger'>Inactive</span>
                            
                        @endif
                        </td>
                        <td><span class='badge badge-primary'>{{ $cour->views }}</span></td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can ('delete', $cour)
                                <form action='{{ route('cour.destroy', $cour->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-outline-dark" type="submit">Delete</button>
                                </form>
                                @endcan
                                @can ('update', $cour)
                                <a class='btn btn-outline-dark' href='{{ route('cour.edit', $cour->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btn-outline-dark' href='{{ route('cour.read', $cour->id) }}' role='button'>Read</a>
                                @if (Auth::user()->role_id == 1)
                                @if ($cour->status == 0)

                                    <form action='{{ route('cour.publish', $cour->id) }}' method='post'>
                                        @csrf
                                        {{-- @method('put') --}}
                                        <button class='btn btn-success mx-1' type="submit">Publish</button>
                                    </form>
                                @else
                                    <form action='{{ route('cour.unpublish', $cour->id) }}' method='post'>
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
