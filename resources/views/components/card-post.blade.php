@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">

    <img class="w-full h-72 object-cover object-center" src="{{ $post->image ? Storage::url($post->image->url) : 'https://cdn.pixabay.com/photo/2021/08/23/18/37/tea-6568547_960_720.jpg' }}" alt="{{ $post->name }}">
    
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>

        <div class="text-gray-700 text-base">
            {!! $post->extract !!}
        </div>

    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-{{ $tag->color }}-200 rounded-full px-3 py-1 text-sm text-gray-700">
                {{ $tag->name }}
            </a>
        @endforeach
    </div>

</article>