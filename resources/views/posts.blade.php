{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')

@foreach ($posts as $post)

<article class="mb-5">
<h2>
<a href="/post/{{ $post["slug"] }}">{{ $post["title"] }}</a>
</h2>
<h2>{{ $post['author']}}</h2>
<p>{{ $post['body']}}</p>
</article>

@endforeach

@endsection  