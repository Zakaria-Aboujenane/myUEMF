<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'posts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'title',
        'type',
        'user_id',
        'createdAt',
        'deletedAt',
    ];

    public function user(){
            return $this->belongsTo(User::class);
    }
    public function likes(){
        return $this->hasMany(Like::class,'post_id');
    }
}
