<?php

namespace App\Models;

use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = ['title', 'author', 'slug', 'body'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $with = ['author', 'category']; // atau bisa denga bigger loading by default

    // Penghubung 2 table
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // public static function all()
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'The Biggest Penis Ever.',
    //             'slug' => 'the-biggest-penis-ever',
    //             'author' => 'Yahya Sudirman',
    //             'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi et accusantium quod iste laboriosam
    //                 corrupti nihil vitae cumque. Molestias dolore mollitia deserunt a porro quas aliquid, nobis rerum
    //                 voluptatemrepudiandae.</p>'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'The Biggest Boobs Ever.',
    //             'slug' => 'the-biggest-boobs-ever',
    //             'author' => 'Sulton mubakar',
    //             'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cumque obcaecati reiciendis nisi
    //                 tenetur, voluptatem, minima accusantium officiis, quisquam rerum explicabo aliquid! Facilis
    //                 perferendis eaque possimus harum omnis accusantium ut.</p>'
    //         ]
    //     ];
    // }

    // public static function find($slug): array
    // {
    //     $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    //     // Atau:
    //     // $post = Arr::first(static::all(), function ($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });

    //     if ($post == null) {
    //         abort(404);
    //     } else {
    //         return $post;
    //     }
    // }
}
