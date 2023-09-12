@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center">My Blogs 
                    <a href="{{ route('blogs.create')}}" class="btn btn-outline-secondary">Create Blog</a>
                </div></div>
                <div class="ml-auto ">
                    

                <div class="card-body">
                    

                <table class="table table-striped" id="blog-table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($getBlogs as $blog)
                        <tr>
                            <th >{{ $blog->title}}</th>
                            <td>{{ $blog->category}}</td>
                            <td>{{ $blog->created_date}}</td>
                            <td>
                                <a href="{{ $blog->url }}" class="btn btn-sm btn-outline-primary">View</a>
                                <a href="{{ route('blogs.edit', $blog->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                                <form class="form-delete" action="{{ route('blogs.destroy', $blog->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button button="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="4" style="text-align: cnemter"> No data found</td>
                        </tr>
                        @endforelse

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

