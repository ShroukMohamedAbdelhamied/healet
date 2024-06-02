@extends('layouts.main')

@section('content')
    <!-- slider section -->
    @include('includes.sliderSection')
    <!-- end slider section -->

    <!-- shop section -->
    @include('includes.shopSection')
    <!-- end shop section -->

    <!-- about section -->
    @include('includes.aboutSection')
    <!-- end about section -->

    <!-- offer section -->
    @include('includes.offerSection')
    <!-- end offer section -->

    <!-- blog section -->
    @include('includes.blogSection')
    <!-- end blog section -->

    <!-- client section -->
    @include('includes.clientSection')
    <!-- end client section -->

    <!-- info section -->
    @include('includes.infoSection')
    <!-- end info_section -->
@endsection
