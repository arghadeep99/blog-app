@csrf
<div class="form-group">
    <label for="question-title">Blog Title</label>
    <input type="text" name="title" value="{{ old('title', $blog->title) }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">

    @if ($errors->has('title'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('title') }}</strong>
        </div>
    @endif
</div>
<br>
<div class="form-group">
    <label for="question-title">Blog Category</label>

    <select name="category" class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" id="category" >
        <option value="" >Select</option>
        @foreach($categoryArray as $key=>$value)
            @if(old('category', $blog->category) == $value)
                <option value="{{$value}}" selected>{{$value}}</option>
            @else
                <option value="{{$value}}">{{$value}}</option>    
            @endif
        
        @endforeach
    </select>

    @if ($errors->has('category'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('category') }}</strong>
        </div>
    @endif
</div>
<br>
<div class="form-group">
    <label for="question-body">Explain you blog</label>
    <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body', $blog->body) }}</textarea>

    @if ($errors->has('body'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('body') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <br>
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>