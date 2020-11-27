<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head')
    <body>
        <div id="app">
        @include('inc.navbar')
        <fatada> </fatada>
        @yield('continut')
<!-- $iconUrls vine din AppServiceProvider unde se injecteaza prin View::composer -->
        <blazon urls="{{ json_encode($iconUrls) }}"></blazon>

		<div class="splash"> 
            <img class="fade-in" src="{{ asset('assets/sigla.png') }}" />
        </div>

        <mijloc> </mijloc>
        <section class="page-body">
            <above-footer v-slot:slot1 > 
                <div class="first-row">
                    <article class="grid_3  carousel-article">
                        <h4 data-content>Cateva din lucrarile noastre</h4>
                        <div class="caroufredsel_wrapper">
                        <ul style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; 
                                left: 0px; margin: 0px; width: 1540px; height: 500px;" id="foo3" class="carousel-li">
                            <li id="#slide1">
                            <p>
                                Slider1, welcome to freshdesignweb blog, here is useful slider text example
                                tutorial with demo and download link, hope you can learn more about web design. 
                                Regard, Graham Bill
                            </p>
                            <img src="{{ asset('assets/liebherr-vehicle-cranes.jpg') }}" alt="">
                            </li>
                            <li id="#slide2">
                            <p>
                                Slider2, welcome to freshdesignweb blog, here is useful slider text example tutorial 
                                with demo and download link, hope you can learn more about web design. Regard, 
                                Graham Bill
                            </p>
                            <img src="{{ asset('assets/liebherr-vehicle-cranes.jpg') }}" alt="">
                            </li>
                            <li id="#slide3">
                            <p>
                                Slider3, welcome to freshdesignweb blog, here is useful slider text example tutorial 
                                with demo and download link, hope you can learn more about web design.Regard, Graham Bill
                            </p>
                            <img src="{{ asset('assets/liebherr-vehicle-cranes.jpg') }}" alt="">
                        </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="carousel-pagination" id="foo3_pag">
                            <!-- <a id="pag-link1" class="selected" href="#slide1">
                                <span>1</span>
                            </a>
                            <a id="pag-link2" class="" href="#slide2">
                                <span>6</span>
                            </a>
                            <a id="pag-link3" class="" href="#slide3">
                                <span>3</span>
                            </a> -->
                        </div>
                </article><!-- slider text article end -->

                </div>
            </above-footer>
        </section>
        <contact errs="{{ $errors }}" :dataold="{nume:'{{old('nume')}}',email:'{{old('email')}}',telefon:'{{old('telefon')}}',mesaj:'{{old('mesaj')}}'}"> </contact>
        <!-- <blazon url1="{{ asset('assets/icoane/24hrs.png') }}" 
                 url2="{{ asset('assets/icoane/familie.png') }}"
                url3="{{ asset('assets/icoane/dent-wheel.png') }}"></blazon> -->
        </div>
        
        
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a class="text-warning" href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
        @include('inc.footer')
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
		<script src="{{ mix('js/app.js') }}"> </script>
    </body>
</html>
