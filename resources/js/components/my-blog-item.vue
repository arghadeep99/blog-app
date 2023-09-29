<template>
     <tr >
        <th >{{ blog.title}}</th>
        <td>{{ blog.category}}</td>
        <td>{{ blog.created_date}}</td>
        <td>
            <a :href="blog.url" class="btn btn-sm btn-outline-primary">View</a>
            <a :href="`/blogs/${blog.id}/edit`" class="btn btn-sm btn-outline-warning">Edit</a>
            <button @click="deleteblog" type="button" class="btn btn-sm btn-outline-danger" >Delete</button>
        </td>
    </tr>
</template>

<script>

export default {

    props: ['blog'],

    data() {
        return {
            id: this.blog.id
        }
    },

    methods: {

        deleteblog () {

            if(confirm("Are you sure to delete this Blog?"))
            {
                axios.delete(`/blogs/${this.id}`)
                    .then(res =>  {
                    $(this.$el).fadeOut(500, () => {
                            alert(res.data.message);
                        })
                    })
                    .catch();

                }
        }
        
   }
    
}
</script>
