@extends('back.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('back.conversations.users', ['users' => $users])
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $user->nom }}</div>
                    <div class="card-body conversation">
                        @foreach ($messages as $message )
                            <div class="col-md-10" {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}>
                                <p>
                                    <strong>{{ $message->from->nom }}</strong>
                                    {{ $message->message }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                        <form action="{{ route('conversations.store', $user->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="message"class="form-control" placeholder="message"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
