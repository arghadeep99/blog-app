@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Blogs</div>

                <div class="card-body">
                    @foreach($blogs as $blog)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">{{ $blog->title }}</h3>
                                {{ \Illuminate\Support\Str::limit($blog->body, 250) }}
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
