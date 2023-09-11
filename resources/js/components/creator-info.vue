<template>
   <p class="lead">
        By
         {{ user.name }} 
        <br>
        <small class="text-muted">{{ created_date }} </small>
    </p>
</template>

<script>

export default{

    props: ['model', 'user'], 

    data() {
        return {
            user : this.user,
            created_date: this.model.created_date
        }
    }
}
</script>
