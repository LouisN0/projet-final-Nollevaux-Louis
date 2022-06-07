@foreach ($comments as $comment)
    <div class="comment-item replied-comment">
        <img src="{{ asset('/images/'. $comment->user->image)  }}" alt="" style="width:10%">
        <h4>{{ $comment->user->nom }}</h4>
        <span>{{ $comment->created_at->diffForHumans() }}</span>
        
        <p>{{$comment->body}}</p>
        
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
            @if (Route::has('login'))
                @auth
                <input type="submit" class="btn btn-warning" value="Reply" />
                @else
                @endauth
            @endif
            </div>
        </form>
        @include('front.partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach
