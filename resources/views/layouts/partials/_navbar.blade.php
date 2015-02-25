<header id="header" class="@yield('nav-class', 'skel-layers-fixed')">
    <h1 id="logo">{!! HTML::link('/', 'UWI Mona AA') !!}</h1>
    <nav id="nav">
        <ul>
            <li>{!! HTML::link('/', 'Home') !!}</li>
            {{--Example of how to make a drop down menu--}}
            {{--<li>--}}
            {{--<a href="">Layouts</a>--}}
            {{--<ul>--}}
            {{--<li><a href="left-sidebar.html">Left Sidebar</a></li>--}}
            {{--<li><a href="right-sidebar.html">Right Sidebar</a></li>--}}
            {{--<li><a href="no-sidebar.html">No Sidebar</a></li>--}}
            {{--<li>--}}
            {{--<a href="">Submenu</a>--}}
            {{--<ul>--}}
            {{--<li><a href="#">Option 1</a></li>--}}
            {{--<li><a href="#">Option 2</a></li>--}}
            {{--<li><a href="#">Option 3</a></li>--}}
            {{--<li><a href="#">Option 4</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            <li>{!! HTML::link('about', 'About') !!}</li>
            <li>{!! HTML::link('contact', 'Contact') !!}</li>
            @if (Auth::guest())
                <li>{!! HTML::link('login', 'Login') !!}</li>
                <li>{!! HTML::link('register', 'Sign Up', ['class' => 'button special']) !!}</li>
            @else
                <li>{!! HTML::link('posts', 'Forum') !!}</li>
                <li>{!! link_to('/profiles/' . Auth::user()->username, Auth::user()->username) !!}</li>
                <li>{!! HTML::link('logout', 'Logout') !!}</li>
            @endif
        </ul>
    </nav>
</header>