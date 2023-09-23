<template>
<div class="media post">
    <div class="media-body">
        <h3 class="mt-0"><a :href="blog.url" class="ancor-no-decoration" >{{ blog.title }}</a></h3>
        <creator-info :model="blog" :user="blog.user"></creator-info>
        {{ body }}
    </div>                        
</div>
</template>

<script>

export default {
    props: ['blog'],

    computed: {
    
        body () {
            return this.blog.body.substring(0,300) + '...';
        }
    }

}

</script>