<x-layout>

    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>

    <div class="py-5 border-b border-gray-500">
        <article class="py-3 max-w-screen-md border-b border-gray-500" tabindex="0">
            <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-300">
                {{ $post['title'] }}</h2>
            <small class="text-gray-400">
                <span>
                    <a href="/posts/{{ $post['id'] }}">{{ $post['author'] }}</a>
                    | 30 Agust 2022
                </span>
            </small>
            <hr>
            <div class="my-8 font-light">
                {!! $post['body'] !!}
            </div>
            <a class="hover:text-blue-500 hover:underline" href="/posts"> &laquo;... Back To All blog</a>
        </article>
    </div>


</x-layout>
