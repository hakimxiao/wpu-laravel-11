<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // mehod untuk relation : dippanggil sebagai atribute bukan method
    public function posts(): HasMany
    {
        // GOOD FOR KNOW !!
            // jika nama kolom table beda dengan nama table yang di relasikannya 
            //      maka kita harus tambahkan spesifikasi nama colom nya contoh disini 
            //      padahal nama table yang berelasi adalah user tapi di database kita kolomnya 
            //          author_id bukan user_id maka kita deklarasikan seperti ini : 
        return $this->hasMany(Post::class, 'author_id');
    }
}
