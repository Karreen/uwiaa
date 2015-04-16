@extends('layouts.main')

@section('meta-title', 'Profile')


@section('content')
    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">

            <header class="major">
                <h2>Profile</h2>

                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach


            <div class="row">
                @if ($user->profile == null)
                    <div class="4u  6u(xsmall)"><span class="image fit"><img src="images/pic02.jpg" alt=""/></span></div>
                @endif

                <div class="4u  6u(medium)">
                @if ($user->profile)

                        <h1>
                            {{ $user->username  }}
                            @if ($user->profile)

                                |<small>{{ $user->profile->street }}, {{ $user->profile->city }}</small>
                            @endif
                        </h1>
                    </div>

                    <ul>
                        <li>{!! link_to('http://github.com/' . $user->profile->github_username, 'View my work on Github') !!}</li>
                    </ul>

                @else
                    <small>No Details</small>
                @endif

                @if ($user->isCurrent())
                    {!! link_to_route('profile.edit', 'Edit', $user->username) !!}
                @endif
                </div>
            </div>

            <div>
                @if ($user->profile)
                    {{ $user->profile->bio }}
                @else
                    <small>No Details</small>
                @endif
            </div>
        </div>
    </div>
@endsection