<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function isOnline()
    {
        if ($this->online == 1) {
            return true;
        } else {
            return false;
        }
    }
}
