<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h1>{{ blog.title }}</h1>
                        <div class="ml-auto ">
                            <a href="/blogs" class="btn btn-outline-secondary">Back to Blogs</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                   
                    {{ blog.body }}
                    <br><br>
                    <div class=" text-float-right">
                        <creator-info :model="blog" :user="userdetails"></creator-info>
                    </div>

                </div>
            </div>
        </div>

        <!-- @include('blogs._related_blogs', ['getRelatedblogs'=>$getRelatedblogs]) -->
        <related-blogs :getrelatedblogs="getrelatedblogs" :count="countrelatedblog" ></related-blogs>
        
    </div>
</div>
</template>

<script>

export default {
    props: ['getrelatedblogs', 'blog', 'userdetails', 'countrelatedblog'],
  
}
</script>
