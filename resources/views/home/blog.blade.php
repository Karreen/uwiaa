@extends('layouts.main')

@section('content')

    @foreach(array_chunk($posts->getCollection()->all(), 3) as $row)
        <div class="row">
            @foreach($row as $post)
                <article class="col-md-4">
                    <h2>{{ $post->title }}</h2>
                    <img src="{{ $post->image }}" alt="{{ $post->title }}">
                    <div class="body">
                        {{ $post->content }}
                    </div>
                </article>
            @endforeach
        </div>
    @endforeach
    {{ $posts->appends(Request::except('page'))->links() }}
@stop