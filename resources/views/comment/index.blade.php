<x-layout :title="$title">
<h2>{{{ $title }}} Exploring (testing)</h2>
@foreach ($comments as $comment)
<h1 class="text-2xl">{{ $comment->content }}</h1>
<p>Author: {{ $comment->author }}</p>
<a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>
<hr>
@endforeach
</x-layout>