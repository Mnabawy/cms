<ul>
    @foreach ($posts as $post)
        <li>
            <div>
                <img src="{{ $post->path }}" alt="">
            </div>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </li>
    @endforeach
</ul>
