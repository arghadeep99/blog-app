@extends('layouts.app')

@section('content')
    <blog-page :blogs="{{ $blogs }}"></blog-page>
@endsection
