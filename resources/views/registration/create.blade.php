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
                <h2>Registration</h2>

                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            {!! Form::open(['route' => 'registration.store']) !!}
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
                    {!! Form::text('username', null, ['placeholder' => 'Username', 'required' => 'required']) !!}
                </div>
                <div class="6u$ 12u$(xsmall)">
                    {!! Form::text('email', null, ['placeholder' => 'Email', 'required' => 'required', 'id' => 'email']) !!}
                </div>
                <div class="12u$">
                    {!! Form::password('password', ['required' => 'required', 'placeholder' => 'Password']) !!}
                </div>
                <div class="12u$">
                    {!! Form::password('password_confirmation', ['required' => 'required', 'placeholder' => 'Confirm password']) !!}
                </div>
                <div class="12u$">
                    <ul class="actions">
                        <li>{!! Form::submit('Register', ['class' => 'special']) !!}</li>
                        <li><input type="reset" value="Reset"/></li>
                    </ul>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection