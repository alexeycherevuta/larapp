<?php
namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use Sluggable;
    protected $fillable = [
        'title', 'content', 'user_id',
    ];
    protected $casts = [
        'is_online' => 'boolean',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeOnline($query)
    {
        return $query->where('is_online', '=', true);
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
