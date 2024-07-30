<x-layout>

    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>

    <div class="py-5 border-b border-gray-500">
        @foreach ($posts as $post)
            <article class="py-3 max-w-screen-md border-b border-gray-500" tabindex="0">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-300 hover:text-gray-200">
                        {{ $post['title'] }}</h2>
                </a>
                <small class="text-gray-400">
                    <span>
                        <a href="/posts/{{ $post['slug'] }}">{{ $post['author'] }}</a>
                        | 30 Agust 2022
                    </span>
                </small>
                <hr>
                <div class="my-8 font-light">
                    {!! Str::limit($post['body'], 130) !!}
                    <a class="hover:text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">Read More...
                        &raquo;</a>
                </div>
            </article>
        @endforeach
    </div>


</x-layout>
