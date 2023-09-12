<template>
   <p class="lead">
        By
         {{ username }} 
        <br>
        <small class="text-muted">{{ created_date }} </small>
    </p>
</template>

<script>

export default{

    props: ['model', 'user'], 

    data() {
        return {
            username : this.user.name,
            created_date: this.model.created_date
        }
    }
}
</script>
