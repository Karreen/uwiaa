@extends('layouts.main')
@section('content')
    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Forum</h2>
                <p>Welcome to the forum page</p>
            </header>
            <div class="row 150%">

                <!-- side bar -->
                @include('posts.partials._left_sidebar')

                <!-- main content -->
                <div class="8u$ 12u$(medium) important(medium)">

                    <!-- Content -->
                    <section id="content">

                        <div class="table-wrapper">
                            <table class="alt">
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {!! link_to('/posts/' . $post->id, $post->title) !!}

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        {{--<h3>Amet Lorem Tempus</h3>--}}

                        {{--<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed--}}
                            {{--tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>--}}

                        {{--<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>--}}
                        {{--<h3>Dolore Amet Consequat</h3>--}}
                        {{--<p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at magna consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.</p>--}}
                        {{--<p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum porta cursus justo. Quisque ultricies lorem in ligula condimentum, et egestas turpis sagittis. Cras ac nunc urna. Nullam eget lobortis purus. Phasellus vitae tortor non est placerat tristique.</p>--}}
                        {{--<h3>Sed Magna Ornare</h3>--}}
                        {{--<p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem eget lacinia fringilla. Sed sed felis justo. Nunc sodales elit in laoreet aliquam. Nam gravida, nisl sit amet iaculis porttitor, risus nisi rutrum metus.</p>--}}
                        {{--<ul>--}}
                            {{--<li>Faucibus orci lobortis ac adipiscing integer.</li>--}}
                            {{--<li>Col accumsan arcu mi aliquet placerat.</li>--}}
                            {{--<li>Lobortis vestibulum ut magna tempor massa nascetur.</li>--}}
                            {{--<li>Blandit massa non blandit tempor interdum.</li>--}}
                            {{--<li>Lacinia mattis arcu nascetur lobortis.</li>--}}
                        {{--</ul>--}}
                    </section>

                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>
@stop