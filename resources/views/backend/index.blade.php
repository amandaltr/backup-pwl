<x-App-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Back End') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">

        @forelse ($posts as $post)
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <h2 class="font-bold text-2x1">
                {{ $post->title }}
            </h2>
            <p class="mt-2">
                {{ $post->excerpt }}
            </p>
            <span class="block mt-4 text-sm opacity-70">
                {{ $post->updated_at->diffForHumans() }}
            </span>
        </div>
        @empty
    <p class="mt-2"> Anda belum Memiliki Postingan</p>
    @endforelse
    {{ $posts->links() }}
    </div>
</div>
</x-App-layout>