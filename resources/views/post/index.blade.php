<x-layout :title="$title">
 <h1>{{ $title }}</h1>
 @foreach ($posts as $post)
 <h2 class="text-2xl pb-1">
     <a href="blog/{{ $post->id }}"> {{ $post->title }}</a>
     <p class="text-xl">{{ $post->author }}</p>
</h2>
 <p>{{ $post->body }}</p>
 <hr>
 @endforeach
 <footer class="mt-10">
    {{ $posts }}
 </footer>
</x-layout>