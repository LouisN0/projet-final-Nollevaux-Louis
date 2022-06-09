@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Demandes</h1>
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
        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        @endif
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th  scope='col'>status</th>
                    <th  scope='col'>date</th>
                    <th  scope='col'>from</th>
                    <th  scope='col'>to</th>
                    <th  scope='col'>cour</th>
                    <th  scope='col'>action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @if (Auth::user()->role_id == '2')
                    @foreach ($demandes->where('to', '==', Auth::user()->nom) as $demande)
                        <tr>
                            <th scope='row'>{{ $demande->id }}</th>
                            <td>
                                @if ($demande->status == false)
                                    <span class='badge badge-danger'>Pending</span>
                                @elseif ($demande->status == true)
                                    <span class='badge badge-success'>Accepted</span>
                                @endif
                            </td>
                            <td>
                                @if ($demande->date == null)
                                    <span class="badge badge-danger">Pending</span>
                                @else
                                    {{ $demande->date }}
                                @endif
                            </td>
                            <td>{{ $demande->from }}</td>
                            <td>{{ $demande->to }}</td>
                            <td>{{ $demande->cours }}</td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    <form action='{{ route('demande.destroy', $demande->id) }}' method='post'>
                                        @csrf
                                        <button class='btn btn-outline-dark' type="submit">Delete</button>
                                    </form>
                                    <a class='btn btn-outline-dark' href='{{ route('demande.edit', $demande->id) }}'
                                        role='button'>Edit</a>
                                    <a class='btn btn-outline-dark' href='{{ route('demande.read', $demande->id) }}'
                                        role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @elseif (Auth::user())
                    @foreach ($demandes->where('from', '==', Auth::user()->nom) as $demande)
                        <tr>
                            <th scope='row'>{{ $demande->id }}</th>
                            <td>
                                @if ($demande->status == false)
                                    <span class='badge badge-danger'>Pending</span>
                                @elseif ($demande->status == true)
                                    <span class='badge badge-success'>Accepted</span>
                                @endif
                            </td>
                            <td>
                                @if ($demande->date == null)
                                    <span class='badge badge-danger'>Pending</span>
                                @else
                                    {{ $demande->date }}
                                @endif
                            </td>
                            <td>{{ $demande->from }}</td>
                            <td>{{ $demande->to }}</td>
                            <td>{{ $demande->cours }}</td>
                            <td class="d-flex"> {{-- all_td_anchor --}}
                                <form action='{{ route('demande.destroy', $demande->id) }}' method='post'>
                                    @csrf
                                    <button class='btn btn-outline-dark' type="submit">Delete</button>
                                </form>
                            
                                <a class='btn btn-outline-dark' href='{{ route('demande.read', $demande->id) }}'
                                    role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection
