<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- cara melopping dari folder routes --}}
    <article class="py-8 max-w-screen-md ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-300">{{ $post['title'] }} </h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 03 November 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'], 150  }}.
        </p>
        <a href="/posts" class="text-base font-medium text-red-900 hover:underline"> &laquo; Back to Posts
            </a>
    </article>

</x-layout>
