@extends('layouts.main')

@section('content')

    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Forum</h2>

                <p>Creating a new post...</p>
            </header>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            {!! Form::open(['route' => 'posts.store']) !!}
            <div class="row uniform 50%">
                <div class="12u$">
                    {!! Form::text('username', null, ['placeholder' => 'Receiver Username', 'required' => 'required', 'id' => 'username']) !!}
                </div>
                <div class="12u$">
                    {!! Form::text('title', null, ['placeholder' => 'Title', 'required' => 'required', 'id' => 'title']) !!}
                </div>
                <div class="12u$">
                    {!! Form::textArea('content', null, ['placeholder' => 'Type here....', 'required' => 'required', 'id' => 'content']) !!}
                </div>
                <div class="12u$">
                    <ul class="actions">
                        <li>{!! Form::submit('Submit', ['class' => 'special']) !!}</li>
                        <li><input type="reset" value="Reset"/></li>
                    </ul>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop