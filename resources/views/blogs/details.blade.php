@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h1>{{ $blog->title }}</h1>
                        <div class="ml-auto ">
                            <a href="{{ route('blogs.index')}}" class="btn btn-outline-secondary">Back to Blogs</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                   
                    {!! $blog->body !!}
                    <br><br>
                    <div class=" text-float-right">
                       <creatorInfo :blog={{ $blog }}></creatorInfo>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Related Blog</h2>
                      
                    </div>
                </div>
                @forelse($getRelatedblogs as $blogResult)
                    <div class="card-body">
                        <div class="card" >
                            <div class="card-body">
                                <h4 class="card-title"><a href="{{ $blogResult->url }}" class="ancor-no-decoration" >{{$blogResult->title}}</a></h4>
                                <p class="card-text">{{\Illuminate\Support\Str::limit($blogResult->body, 100)}}</p>
                                
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card-body">No Related Blogs</div>
                @endforelse
            </div>
        </div>
        
    </div>
</div>
@endsection
