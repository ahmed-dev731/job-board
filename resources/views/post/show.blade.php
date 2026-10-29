<x-layout :title="$title">
    <h1>{{ $title }} -  by {{ $post->author }}</h1>
    <p>{{ $post->body }}</p>
    <hr>
    <ul>
    @foreach ($post->comments as $comment)
        <li>{{ $comment->content}}, {{ $comment->author }}</li>
    @endforeach
    </ul>
</x-layout>