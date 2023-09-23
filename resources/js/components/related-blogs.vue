<template>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h2>Related Blog</h2>
                    
                </div>
            </div>
            
                <div v-if="count" >
                    <related-blog-item  v-for="blog in getrelatedblogs" :blog="blog" :key="blog.id" ></related-blog-item>
                </div>
                <div v-else class="card">No Related Blogs</div>
               
        </div>
    </div>
</template>

<script>

export default {
    props: ['getrelatedblogs', 'count']
}

</script>