

<div class="col-md-4">
    <div class="card">
        {{ $image }}
        <div class="card-body">
            <h5 {{ $title->attributes->class(['card-title']) }}>
                {{ $title }}
            </h5>
            <p class="card-text">
                {{ $content }}
            </p>
        </div>
        <div class="card-footer">
            {{ $actions }}
        </div>
    </div>
</div>
