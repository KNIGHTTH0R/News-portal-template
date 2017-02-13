<div class="col-6 col-lg-6">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p><a class="btn btn-secondary" href="/posts/{{ $post->id }}" role="button">View details &raquo;</a></p>
    <p class="blog-post-meta">
        {{  $post->created_at->toFormattedDateString()  }}
    </p>
</div><!--/span-->