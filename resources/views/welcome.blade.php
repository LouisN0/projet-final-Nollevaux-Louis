@extends('front.layouts.app')

@section('content')
    @include('front.partials.banner')
    @include('front.partials.services')
    @include('front.partials.cours')
    @include('front.partials.testimonial')
    @include('front.partials.books')
    @include('front.partials.teacher')
@endsection

@section('responsiveContent')
    @include('front.partials.responsiveNav')
@endsection