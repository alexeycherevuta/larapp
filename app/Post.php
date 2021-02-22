<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
    protected $casts = [
        'is_online' => 'boolean'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeOnline($query){
        return $query->where('is_online', '=', true);
    }
}
