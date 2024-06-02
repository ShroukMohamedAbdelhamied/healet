@extends('layouts.main')

@section('content')
    <header class="header_section innerpage_header">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{route('home')}}">
            <span>
                Healet
            </span>
            </a>
            <div class="" id="">
            <div class="custom_menu-btn">
                <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
                </button>
                <div id="myNav" class="overlay">
                <div class="overlay-content">
                <a class="{{request()->is('home')?"active" : ""}}" href="{{route('home')}}">Home</a>
                <a class="{{request()->is('about')?"active" : ""}}" href="{{route('about')}}">About</a>
                <a class="{{request()->is('shop')?"active" : ""}}" href="{{route('shop')}}">Shop</a>
                <a class="{{request()->is('blog')?"active" : ""}}" href="{{route('blog')}}">Blog</a>
                </div>
                </div>
            </div>

            </div>
        </nav>
        </div>
    </header>

    <!-- about section -->
    @include('includes.aboutSection')
    <!-- end about section -->

          <!-- info section -->
          @include('includes.infoSection')
    <!-- end info_section -->
@endsection


