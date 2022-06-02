@extends('front.layouts.app')
@section('content')
    <section class="single-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="single-teacher-item">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('/images/' . $teacher->photo) }}" alt="">
                                <div class="contact-form">
                                    <form action="{{ route('conversations.store', $teacher->user->id) }}" method="post">
										@csrf
                                        <h4>Contact me</h4>
                                        @if (Route::has('login'))
                                                @auth
                                                <input type="text" id="name" name="s" placeholder=""
                                                value="{{ Auth::user()->nom }}">
                                            <input type="text" id="address" name="s" placeholder=""
                                                value="{{ Auth::user()->email }}">
                                                @else
                                                <input type="text" id="name" name="s" placeholder="Full Name"
                                                value="">
                                            <input type="text" id="address" name="s" placeholder="E-mail Address"
                                                value="">
                                                @endauth
                                            @endif
                                        <textarea id="message" class="message {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" placeholder="Write message"></textarea>
                                        <div class="accent-button">

                                            @if (Route::has('login'))
                                                @auth
                                                    <button type="submit">Send a message</button>
                                                @else
                                                    <a href="{{ route('login') }}">Log in</a>
                                                @endauth
                                            @endif

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="right-info">
                                    <div class="name">
                                        <h2>{{ $teacher->nom }}</h2>
                                        <span>{{ $teacher->discipline }}</span>
                                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                                    </div>
                                    <div class="icons">
                                        <ul>
                                            <li><a href="{{ $teacher->social->facebook }}"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ $teacher->social->twitter }}"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{ $teacher->social->dribble }}"><i
                                                        class="fa fa-dribbble"></i></a></li>
                                            <li><a href="{{ $teacher->social->linkedink }}"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="description">
                                        <p>{{ $teacher->description }}</p>
                                        <h4>Biography</h4>
                                        <p><?= str_replace(['<em>'], ['<em>'], $teacher->biographie) ?></p>
                                        <ul>
                                            <li><i class="fa fa-phone"></i>{{ $teacher->telephone }}</li>
                                            <li><i class="fa fa-envelope"></i><a href="#">{{ $teacher->mail }}</a></li>
                                            <li><i class="fa fa-skype"></i><a
                                                    href="#">{{ $teacher->social->skype }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
