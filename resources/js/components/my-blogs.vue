<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex align-items-center">My Blogs 
                        <a href="/blogs/create" class="btn btn-outline-secondary">Create Blog</a>
                        
                    </div></div>
                    <div class="ml-auto ">
                        

                    <div class="card-body">
                        
                    <br>
                    <table class="table table-striped" id="blog_table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody v-if="countblogs">
                            <my-blog-item v-for="blog in blogs" :key="blog.id" :blog="blog"></my-blog-item>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="4" style="text-align: cnemter"> {{ nodata }}</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
   props: ['blogs', 'countblogs'],

   data () {

    return {
        nodata: "No data found",
    }

   }
 
}
</script>
