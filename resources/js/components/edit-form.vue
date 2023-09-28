<template>
    <form @submit.prevent="update">
        <div class="form-group">
            <label for="question-title">Blog Title</label>
            <input type="text" name="title" id="question-title" class="form-control" v-model="title">
        
        </div>
        <br>
        <div class="form-group">
            <label for="question-title">Blog Category</label>

            <select name="category" class="form-control" id="category" v-model="category" >
                <option value="" >Select</option>
                
                <option v-for="category in categories" :value="category" :key="category" >{{ category }}</option>
                    
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="question-body">Explain you blog</label>
            <textarea name="body" id="question-body" rows="10" class="form-control" v-model="body"></textarea>
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-outline-primary btn-lg" v-html="buttonText"></button>
        </div>
    </form>
</template>
<script>
export default {
    props: ['blog', 'categories'], 

    data () {
        return {
            buttonText: 'Save Blog',
            title: this.blog.title,
            body: this.blog.body,
            category: this.blog.category,
            id: this.blog.id
        }
    },

    methods : {
        update () {
            axios.patch(`/blogs/${this.id}`, {
                title: this.title,
                body: this.body,
                category: this.category
            }).then(() => {
                window.location = '/blogs/my-blogs';
            })
            .catch();

            }
        }
}

</script>
