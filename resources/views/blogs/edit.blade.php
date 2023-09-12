@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Edit Blog</h2>
                        <div class="ml-auto">
                            <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary">Back to all Blogs</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                   <form action="{{ route('blogs.update', $blog->id) }}" method="post">
                        {{ method_field('PUT') }}
                       @include('blogs._form', ['buttonText'=>'Save Blog'])
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
