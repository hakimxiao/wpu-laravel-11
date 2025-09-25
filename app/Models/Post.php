<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    // ** Eager Loading 
    protected $with = ['author', 'category'];


    // mehod untuk relation : dippanggil sebagai atribute bukan method
    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void 
    {
        if(isset($filters['search']) ? $filters['search'] : false)
        $query->where('title', 'like', '%' . request('search') . '%');
    }
}
