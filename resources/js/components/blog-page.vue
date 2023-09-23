<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>All Blogs</h2>
                            <div class="ml-auto">
                                <a :href="'blogs/create'" class="btn btn-outline-secondary">Create Blog</a>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                    
                            <blog v-for="blog in blogs" :blog="blog" :key="blog.id"></blog>
                    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>

export default{
    props: ['blogs']
}
</script>
