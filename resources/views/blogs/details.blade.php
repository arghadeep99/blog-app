@extends('layouts.app')

@section('content')

<blog-details :getrelatedblogs="{{ $getRelatedblogs }}" 
              :blog="{{ $blog }}" 
              :userdetails="{{ $blog->user }}" 
              :countrelatedblog="{{ count($getRelatedblogs) }}">
</blog-details>
@endsection
