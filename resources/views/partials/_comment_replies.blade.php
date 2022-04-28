

@foreach($comments->reverse() as $comment)
<div class="display-comment card p-2 my-3">
    <div class="card-body">

        <div class="d-flex justify-content-between">
            <div>
                <strong>{{ $comment->user->name }}</strong>
                <p>{{ $comment->comment }}</p>
            </div>
            <div>
                @auth
                    @if (auth()->user()->id == $comment->user_id)
                        <form action="{{ route('comment.delete', $comment->id) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>


        <form method="post" action="{{ route('reply.add', app()->getLocale()) }}">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="comment" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-outline-warning" value="Reply" />
            </div>
        </form>

        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
</div>
@endforeach
