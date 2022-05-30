{{ dd($messages , $users->conversation) }}
        <div class="col-md-3">
            <div class="list-group">
                @foreach ($users as $user)
                    <a class="list-group-item" href="{{ route('conversations.show', $user->id) }}">
                        <img src="{{ asset('/images/'. $user->image) }}" alt="" class="img-size-50 mr-3 img-circle">
                        {{ $user->nom }}
                        @if(isset($unread[$user->id]))
                            <span class="badge badge-pill badge-primary">{{ $unread[$user->id] }}</span>
                        @endif
                    </a>
                @endforeach
            </div>

        </div>