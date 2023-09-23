<div class="card-body">
    <div class="card" >
        <div class="card-body">
            <h4 class="card-title"><a href="{{ $blog->url }}" class="ancor-no-decoration" >{{ $blog->title }}</a></h4>

            <p class="card-text">{{ Str::limit($blog->body, 100) }}</p>
            
        </div>
    </div>
</div>