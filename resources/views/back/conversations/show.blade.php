@extends('back.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('back.conversations.users', ['users' => $users, 'unread' => $unread])
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $user->nom }}</div>
                    
                    <div class="card-body conversation chat-box">
                        {{-- @if($messages->hasMorePages())
                            <div class="text-center">
                                <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">
                                    Show next message
                                </a>
                            </div>
                        @endif --}}
                        @foreach (array_reverse($messages->items()) as $message )
                            <div class="col-md-10 {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}" >
                                <p>
                                    @if ($message->from->id !== $user->id)
                                        <strong>Moi</strong>
                                    @else
                                        <img src="{{ asset('/images/'. $message->from->image) }}" alt="" class="img-size-50 mr-3 img-circle">
                                    
                                        
                                    @endif
                                    {!!  nl2br(e($message->message)) !!}
                                </p>
                            </div>
                        @endforeach
                        {{-- @if($messages->hasMorePages())
                            <div class="text-center">
                                <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light">
                                    Show previous message
                                </a>
                            </div>
                        @endif --}}
                       
                    </div>
                        <form action="{{ route('conversations.store', $user->id) }}" method="post">
                            @csrf
                            <div class="form-group d-flex">
                                <textarea style="width:100%" class="{{ $errors->has('message') ? 'is-invalid' : '' }} form-control border border-secondary" name="message" placeholder="message"></textarea>
                                
                                <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
