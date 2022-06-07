@extends('front.layouts.app')
@section('content')
    <div class="page-heading news-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>News</h1>
                    <span>Salvia next level crucifix pickled heirloom synth</span>
                    <div class="page-list">
                        <ul>
                            <li class="active"><a href="{{ route('news') }}">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="single-post.html">Single Post</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="single-post">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="classic-posts">
                        <div class="single-item">
                            <img src="{{ asset('/images/' . $post->image) }}" alt="">
                            <ul>
                                <li>Posted: <em>{{ $post->date }}</em></li>
                                <li>By: <em>{{ $post->user->nom }}</em></li>
                                <li>Comments: <em>2</em></li>
                            </ul>
                            <a href="single-post.html">
                                <h4>{{ $post->titre }}</h4>
                            </a>
                            <p>{!! $post->texte !!}</p>
                            <div class="tags-share">
                                <div class="tag">
                                    <i class="fa fa-tags"></i>
                                    <p>Tags:</p>
                                    <span>
                                        @foreach ($post->tags as $tag)
                                            <a href="#">{{ $tag->nom }}</a>,
                                        @endforeach

                                    </span>
                                </div>
                                <div class="share">
                                    <div class="second-button">
                                        <a href="#">Share <i class="fa fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments">
                        <div class="heading">
                            <h2>Comments</h2>
                        </div>

                        @include('front.partials._comment_replies', [
                            'comments' => $post->comments,
                            'post_id' => $post->id,
                        ])

                    </div>
                    <div class="leave-comment">
                        <div class="heading">
                            <h2>Leave a comment</h2>
                        </div>
                        <div class="comment-form">
                            <form method="post" action="{{ route('comment.add') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        @if(Route::has('login'))
                                            @auth
                                            <input type="text" id="name" name="s" placeholder="Full Name" value="{{ Auth::user()->nom }}">
                                            @else
                                            <input type="text" id="name" name="s" placeholder="Full Name" value="">
                                            @endauth
                                        @endif
                                        
                                        
                                    </div>
                                    <div class="col-md-6">
                                        @if(Route::has('login'))
                                            @auth
                                            <input type="text" id="email" name="s" placeholder="Email" value="{{ Auth::user()->email }}">
                                            @else
                                            <input type="text" id="email" name="s" placeholder="Email" value="">
                                            @endauth
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <input type='text' name="comment_body" placeholder="Write comment" />
                                        <input type='hidden' name="post_id" value="{{ $post->id }}" />
                                    </div>
                                </div>
                                <div class="accent-button">
                                    @if (Route::has('login'))
                                        @auth
                                        <input type="submit" class="btn btn-warning" value="SUBMIT COMMENT" />
                                        @else
                                            <a href="{{ route('login') }}">Log in</a>
                                        @endauth
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar">
                        <div class="search-box">
                            <input type="text" class="search" name="s" placeholder="Search..." value="">
                        </div>
                        <div class="categories">
                            <div class="widget-heading">
                                <h4>Categories</h4>
                            </div>
                            <ul>
                                @foreach ($categories as $categorie)
                                    <li><a href="{{ url('/categorie/post/' . $categorie->id) }}"><i
                                                class="fa fa-angle-right"></i>{{ $categorie->nom }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tags">
                            <div class="widget-heading">
                                <h4>Tags</h4>
                            </div>
                            <ul>
                                @foreach ($tags as $tag)
                                    <li><a href="{{ url('/tag/post/' . $tag->id) }}">{{ $tag->nom }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
