<x-layout>

    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>

    {{-- <div class="py-5 border-b border-gray-500">
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
                    Updated: {{ $post->updated_at->diffForHumans() }}
                </span>
            </small>
            <div class="my-8 font-light">
                {!! $post['body'] !!}
            </div>
            <a class="hover:text-blue-500 hover:underline" href="javascript:history.back()"> &laquo;... Back To All
                blog</a>
        </article>
    </div> --}}

    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <div class="border-b-2 border-double border-gray-700 pb-5">
                        <a class="text-gray-200 hover:text-blue-500 hover:bg-slate-100 hover:underline rounded-md px-3 py-2 text-sm font-medium bg-slate-500"
                            href="javascript:history.back()">
                            &laquo;... Back
                            To All
                            blog</a>
                    </div>
                    <br>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="{{ $post->author->image }}" alt="Jese Leos">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->author->username }}</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08" title="February 8th, 2022">
                                        {{ $post->created_at->format('F. j, Y - h:i A') }}</time></p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post['title'] }}</h1>
                    <span
                        class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        {!! $post->category->icon !!}
                        {{-- {{ $post->category->name }} --}}
                        <a class="hover:underline"
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </span>
                </header>
                <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
                    classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
                    datepickers.</p>
                <figure class="flex justify-center flex-col">
                    <img src="{{ $post->image }}" alt="">
                    <figcaption>Digital art by {{ $post->author->username }}</figcaption>
                </figure>
                <p>{!! $post['body'] !!}</p>

            </article>
        </div>
    </main>


    <x-related-footer></x-related-footer>



</x-layout>
