@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Blogs</h2>
                        <div class="ml-auto">
                            <a href="{{ route('blogs.create') }}" class="btn btn-outline-secondary">Create Blog</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @include ('layouts._messages')

                    @foreach($blogs as $blog)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0"><a href="{{ $blog->url }}" class="ancor-no-decoration" >{{ $blog->title }}</a></h3>
                                <creator-info :model="{{ $blog }}" :user="{{ $blog->user }}"></creator-info>
                                {{ \Illuminate\Support\Str::limit($blog->body, 300) }}
                            </div>                        
                        </div>
                        <hr>
                       
                    @endforeach

                    <div class="">
                    {{ $blogs->links() }}
                    </div>    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
