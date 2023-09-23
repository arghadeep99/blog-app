<div class="col-md-3">
<div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center">
            <h2>Related Blog</h2>
            
        </div>
    </div>
    @forelse($getRelatedblogs as $blog)
        
        <related-blog-item :blog="{{ $blog }}" ></related-blog-item>
    @empty
        <div class="card">No Related Blogs</div>
    @endforelse
</div>

