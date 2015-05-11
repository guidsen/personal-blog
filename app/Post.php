<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Parsedown;

class Post extends Model
{

    protected $fillable = ['disqus_id', 'title', 'body', 'published'];
    protected $appends = ['html_body'];

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Carbon($value))->format('F d, Y');
    }

    public function getHtmlBodyAttribute()
    {
        return (new Parsedown())->text($this->attributes['body']);
    }
}
