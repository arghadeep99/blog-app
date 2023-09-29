@extends('layouts.app')

@section('content')

<my-blogs :blogs="{{ $getBlogs }}" 
          :countblogs="{{ count($getBlogs) }}" >
</my-blogs>

@endsection

