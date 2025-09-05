<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    //
    protected $fillable = ['title', 'author', 'slug', 'body'];


    // mehod untuk relation : dippanggil sebagai atribute bukan method
    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
