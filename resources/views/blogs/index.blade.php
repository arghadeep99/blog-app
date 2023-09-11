@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Blogs</div>

                <div class="card-body">
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
