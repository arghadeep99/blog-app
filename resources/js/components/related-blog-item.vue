<template>
    <div class="card-body">
        <div class="card" >
            <div class="card-body">
                <h4 class="card-title"><a :href="blog.url" class="ancor-no-decoration" >{{ blog.title }}</a></h4>

                <p class="card-text">{{ body }}</p>
                
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['blog'],

    computed: {
    
        body () {
            return this.blog.body.substring(0,100) + '...';
        }
    }

}

</script>