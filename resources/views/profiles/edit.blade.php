@extends('layouts.main')

@section('meta-title', 'Register')

@section('styles')
    <link rel="stylesheet" href="css/mystyle.css"/>
@endsection

@section('content')
    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">

            <header class="major">
                <h2>Edit</h2>

                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            {!! Form::model($user->profile, ['route' => ['profile.update', $user->username], 'method' => 'put', '_method' => 'PUT']) !!}
            <div class="row uniform 50%">
                <div class="12u$">
                    {!! Form::text('github_username', null, ['placeholder' => 'Github Username']) !!}
                </div>
                <div class="12u$">
                    {!! Form::text('email', null, ['placeholder' => 'Email', 'required' => 'required', 'id' => 'email']) !!}
                </div>
                <div class="12u$">
                    {!! Form::text('username', null, ['placeholder' => 'AA Username', 'required' => 'required']) !!}
                </div>
                <div class="12u$">
                    {!! Form::text('street', null, ['placeholder' => 'Street']) !!}
                </div>
                <div class="12u$">
                    {!! Form::text('city', null, ['placeholder' => 'City']) !!}
                </div>
                <div class="12u$">
                    {!! Form::textarea('bio', null, ['placeholder' => 'Something about myself...']) !!}
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
@endsection
