<div class="form-group {{ ($errors->has('published') ? 'has-error' : '') }}">
    <div class="checkbox">
        <label>
            <input name="published" type="checkbox" value="1" {{ (isset($post)) ? ($post->published == '1') ? 'checked' : '' : '' }}> <strong>Publiceer</strong>
        </label>
    </div>
</div>

<div class="form-group {{ ($errors->has('title') ? 'has-error' : '') }}">
    <label>Titel {!! $errors->first('title', '- <span class="text-danger">:message</span>') !!}</label>
    <input name="title" class="form-control" type="text" value="{{ (isset($post)) ? $post->title : '' }}">
</div>

<div class="form-group {{ ($errors->has('body') ? 'has-error' : '') }}">
    <label>Bericht {!! $errors->first('body', '- <span class="text-danger">:message</span>') !!}</label>
    <textarea name="body" class="form-control" rows="10">{{ (isset($post)) ? $post->body : '' }}</textarea>
</div>