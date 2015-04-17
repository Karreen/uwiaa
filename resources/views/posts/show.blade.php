@extends('layouts.main')

@section('content')

    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>{{ $post->title }}</h2>

                <p>{{ $post->user->username }}</p>
            </header>

            <div class="row uniform 50%">
                <div class="12u$">
                    <p>{{ $post->content }}</p>
                </div>
            </div>

            <header class="major">
                <h2>Comments</h2>

                <p>The community</p>
            </header>

            <div class="row uniform 50%">
                <div class="12u$">
                    @include('posts.partials._comments')
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    {!! HTML::script('js/controllers/CommentCtrl.js')  !!}
@stop