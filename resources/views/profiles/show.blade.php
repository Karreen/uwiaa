@extends('layouts.main')

@section('meta-title', 'Profile')


@section('content')
    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">

            <header class="major">

                <h2>{{ $user->username }}</h2>

                @if ($user->profile)
                    <p>{{ $user->profile->street }}, {{ $user->profile->city }}</p>
                @else
                    <h2>No Profile Available</h2>
                @endif

            </header>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach


            <div class="row">
                @if ($user->profile)
                    <div class="4u  6u(medium)">

                    {{ $user->profile->bio }}

                    <ul>
                        <li>{!! link_to('http://github.com/' . $user->profile->github_username, 'View my work on Github') !!}</li>
                        <li>{!! link_to('http://twitter.com/' . $user->profile->twitter_username, 'Follow me on twitter') !!}</li>
                    </ul>

                    @else
                        <small>No Details</small>
                    @endif

                    @if ($user->isCurrent())
                        {!! link_to_route('profile.edit', 'Edit', $user->username) !!}
                    @endif

                    </div>
                </div>
            </div>
        </div>

@endsection