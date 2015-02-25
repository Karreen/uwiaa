@extends('layouts.main')

@section('meta-title', 'Profile')

@section('styles')
    <link rel="stylesheet" href="css/mystyle.css"/>
@endsection

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



        </div>
    </div>
@endsection