<x-layout>

    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>

    <div class="py-5 border-b border-gray-500">
        <article class="py-3 max-w-screen-md border-b border-gray-500" tabindex="0">
            <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-300">
                {{ $post['title'] }}</h2>
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
                {!! $post['body'] !!}
            </div>
            <a class="hover:text-blue-500 hover:underline" href="javascript:history.back()"> &laquo;... Back To All
                blog</a>
        </article>
    </div>


</x-layout>
