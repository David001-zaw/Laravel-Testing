
    @foreach ($posts as $post)
    <div class="col-md-4 g-3">
        <div class="card">
            <div class="card-header">
                <h4>{{ $post->title }}</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    {!! $formatContent($post->content) !!}
                </p>
            </div>
        </div>
    </div>
    @endforeach

