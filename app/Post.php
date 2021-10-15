<?php
namespace App;
use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'title', 'body'
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
        return $query->is_online;
    }
    public function getFillable()
    {
        return $this->fillable;
    }
}
