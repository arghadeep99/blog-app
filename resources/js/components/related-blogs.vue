<template>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h2>Related Blog</h2>
                    
                </div>
            </div>

            <related-blog v-for="blog in relatedblogs" :blog="blog" :key="blog.id"></related-blog>
        </div>
    </div>
</template>

<script setup>

export default {

    props: ['relatedblogs'],

   

}
</script>
