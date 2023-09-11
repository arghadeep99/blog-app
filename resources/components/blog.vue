<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Blogs</div>

                <div class="card-body">
                    @foreach($blogs as $blog)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0"><a href="/blogs" class="ancor-no-decoration" >{{ title }}</a></h3>
                                <p class="lead">
                                    By
                                    {{ user_name }}
                                    <small class="text-mutes">{{ created_date }}</small>
                                </p>
                                {{ body }}
                            </div>                        
                        </div>
                        <hr>
                    @endforeach

                    <div class="">
                    {{ links }}
                    </div>    
                </div>
            </div>
        </div>
        
    </div>
</template>