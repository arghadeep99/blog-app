@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Create Blog</h2>
                        <div class="ml-auto">
                            <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary">Back to all Blogs</a>
                        </div>
                    </div>

                </div>

               <!-- <div class="card-body">
                <form action="{{ route('blogs.store') }}" method="post">
                       @include('blogs._form', ['buttonText'=>'Create Blog'])
                   </form> 
                </div>-->
                
                <?php $categoryArray = json_encode($categoryArray);
                ?>
                <div class="card-body">
                  
                   <add-form :categories="{{$categoryArray}}" ></add-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
