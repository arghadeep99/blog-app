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

                    @forelse($blogs as $blog)
                        
                        @include('blogs._containt')
                       
                    @empty
                    
                    <div class="alert alert-warning">
                            <strong>Sorry</strong>No Blogs are available.
                    </div>
                    @endforelse

                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
