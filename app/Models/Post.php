<?php

// ini wajib di deklare karena, standarisasi laravel yang bertujuan untuk menspesifikasikan class agar tidak bentrok nama
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-article-pertama',
                'title' => 'Judul Article Pertama',
                'author' => 'Abu Solihin Alhakim',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque e arum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-article-kedua',
                'title' => 'Judul Article Kedua',
                'author' => 'Hakimxiao',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque earum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
            ]
        ];
    }


    public static function find($slug)
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
