<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        {{-- cara melopping dari folder routes --}}
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-300">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 03 November 2025
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}.
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="text-base font-medium text-red-900 hover:underline">Read more
                &raquo;</a>
        </article>
    @endforeach

</x-layout>
