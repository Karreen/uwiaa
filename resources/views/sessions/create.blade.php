@extends('layouts.main')

@section('content')

    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Login</h2>

                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            {!! Form::open(['route' => 'sessions.store']) !!}
            <div class="row uniform 50%">
                <div class="12u$">
                    {!! Form::text('email', null, ['placeholder' => 'Email', 'required' => 'required', 'id' => 'email']) !!}
                </div>
                <div class="12u$">
                    {!! Form::password('password', ['required' => 'required', 'placeholder' => 'Password']) !!}
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