<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0 ">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                {{-- cara melopping dari folder routes --}}

                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500 ">

                        <a href="/categories/{{ $post->category->slug }}">
                            <span
                                class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->name }}
                            </span>
                        </a>

                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <a href="/posts/{{ $post->slug }}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $post->title }}
                        </h2>
                    </a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 text-lg">
                        {{ Str::limit($post->body, 150) }}</p>
                    <div class="flex justify-between items-center">
                        <a href="/authors/{{ $post->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img class="w-7 h-7 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                    alt="{{ $post->author->name }}" />
                                <span class="font-medium dark:text-white text-sm">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a href="/posts/{{ $post->slug }}"
                            class="text-base font-medium text-red-900 hover:underline">
                            Read more
                            &raquo;</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
