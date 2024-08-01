<x-layout>

    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>

    <div class="py-5 border-b border-gray-500">
        @foreach ($posts as $post)
            <article class="py-3 max-w-screen-md border-b border-gray-500" tabindex="0">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-300 hover:text-gray-200">
                        {{ $post['title'] }}</h2>
                </a>
                <small class="">
                    <span>
                        By.
                        <a class="hover:underline hover:text-white text-gray-400"
                            href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                        In
                        <a class="hover:underline hover:text-white text-gray-400"
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        | {{ $post->created_at->format('j F Y - h:i A') }}
                    </span>
                </small>
                <hr>
                <small class="text-gray-400 text-1xl">
                    <span>
                        Updated: {{ $post->created_at->diffForHumans() }}
                    </span>
                </small>
                <div class="my-8 font-light">
                    {!! Str::limit($post['body'], 130) !!}
                    <a class="hover:text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">Read More...
                        &raquo;</a>
                </div>
            </article>
        @endforeach
    </div>


</x-layout>
