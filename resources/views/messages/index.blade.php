@extends('layouts.main')

@section('content')

    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2> Private Messages </h2>

                @if ($messages == null)
                    <p>No messages available</p>
                @else
                    <p>You have mail</p>
                @endif
            </header>

            <div class="row uniform 50%">
                <div class="12u$">
                    @if ($messages)
                        @foreach($messages as $message)

                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

@stop

@section('scripts')
    {{--{!! HTML::script('js/controllers/MessageCtrl.js')  !!}--}}
@stop