<template>
     <p class="lead">
        By
         username 
        <br>
        <small class="text-mutes">created_date </small>
    </p>
</template>

<script>

export default {
    props: ['blog'],

    data () {
        return {
            username: this.blog.user.name,
            created_date: this.blog.created_date
        }
    }
}
</script>
