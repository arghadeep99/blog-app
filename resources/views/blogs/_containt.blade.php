<div class="media post">
    <div class="media-body">
        <h3 class="mt-0"><a href="{{ $blog->url }}" class="ancor-no-decoration" >{{ $blog->title }}</a></h3>
        <creator-info :model="{{ $blog }}" :user="{{ $blog->user }}"></creator-info>
        {{ \Illuminate\Support\Str::limit($blog->body, 300) }}
    </div>                        
</div>